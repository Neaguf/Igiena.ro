<template>
  <el-dialog
    title="Evenimente"
    :visible.sync="showPopup"
    class="my-dialog-class"
  >
    <el-form
      label-position="top"
      :inline="false"
      :rules="rules"
      label-width="100%"
      :model="selectedObject"
      ref="my-form"
      @submit.prevent="save"
      v-loading="loadingVisible"
    >
      <el-row :gutter="15">
        <el-col :md="8">
          <el-form-item label="Titlu">
            <el-input class="full-width" v-model="selectedObject.titlu" />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="slug">
            <el-input
              class="full-width"
              v-model="selectedObject.slug"
              disabled
            />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Tip">
            <el-select class="full-width" v-model="selectedObject.Tip"
              ><el-option label="concurs" value="concurs"></el-option
              ><el-option label="eveniment" value="eveniment"></el-option>
            </el-select>
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Data Creare">
            <el-date-picker
              class="full-width"
              v-model="selectedObject.DataCreare"
              type="date"
              value-format="yyyy-MM-dd"
              format="dd.MM.yyyy"
            />
          </el-form-item>
        </el-col>
        <el-col :md="24">
          <el-form-item label="poza">
            <el-upload
              class="my-uploader"
              :action="baseUrl + 'Evenimente/upload_poza'"
              :show-file-list="false"
              :on-success="handleUploadSuccess_poza"
            >
              <i class="el-icon-plus my-uploader-icon"></i>
            </el-upload>
            <img
              v-if="selectedObject.uploadPreview_poza"
              :src="selectedObject.uploadPreview_poza"
            />
          </el-form-item>
        </el-col>
        <el-col :md="24">
          <el-form-item label="continut">
            <editor
              api-key="p6c4zd25tao155ex1uk6z3x2vms9tkqdcri5jmg7g6obrqow"
              v-model="selectedObject.continut"
              :init="{
                height: 500,
                images_upload_url:
                  baseUrl + 'Evenimente/upload_imagine_wysiwyg_continut',
                automatic_uploads: true,
                image_caption: true,
                plugins:
                  'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar:
                  'undo redo | bold italic underline strikethrough | fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                toolbar_mode: 'sliding',
              }"
            />
          </el-form-item>
        </el-col>
      </el-row>
    </el-form>
    <span slot="footer" class="dialog-footer">
      <el-button @click="showPopup = false"> Renunta </el-button>
      <el-button type="primary" @click="save"> Salveaza </el-button>
    </span>
  </el-dialog>
</template>

<script>
import settings from "@/backend/LocalSettings";
import BasePage from "@/pages/BasePage";
import Editor from "@tinymce/tinymce-vue";
export default {
  name: "Evenimente_dialog",
  extends: BasePage,
  components: { editor: Editor },
  data() {
    return {
      baseUrl: "",
      showPopup: false,
      mode: "add",
      selectedObject: {
        titlu: "",
        slug: "",
        Tip: "",
        DataCreare: "",
        poza: "",
        uploadPreview_poza: "",
        continut: "",
      },
      Info: {},
      rules: {
        //   Nume: [ { required: true, message: "Campul este obligatoriu" } ]
        titlu: [{ required: true, message: "Campul este obligatoriu" }],
        slug: [{ required: true, message: "Campul este obligatoriu" }],
        Tip: [{ required: true, message: "Campul este obligatoriu" }],
        DataCreare: [{ required: true, message: "Campul este obligatoriu" }],
        poza: [{ required: true, message: "Campul este obligatoriu" }],
        continut: [{ required: true, message: "Campul este obligatoriu" }],
      },
    };
  },
  methods: {
    show_me: async function (id) {
      this.showPopup = true;
      if (id == null) {
        this.mode = "add";
        this.selectedObject = {
          titlu: "",
          slug: "",
          Tip: "",
          DataCreare: "",
          poza: "",
          uploadPreview_poza: "",
          continut: "",
        };
      } else {
        this.mode = "edit";
        var result = await this.post("evenimente/get_info_item_dialog", {
          id: id,
        });
        this.selectedObject = result.Item;
      }
    },
    async get_info() {
      var response = await this.post("evenimente/get_info_for_dialog");
    },
    handleUploadSuccess_poza(response) {
      this.selectedObject.poza = response.FileName;
      this.selectedObject.uploadPreview_poza = response.Url;
    },
    save: async function () {
      this.$refs["my-form"].validate(async (valid) => {
        if (valid) {
          await this.post("evenimente/save", {
            mode: this.mode,
            object: this.selectedObject,
          });
          this.showPopup = false;
          this.$emit("save");
        }
      });
    },
  },
  mounted: function () {
    this.baseUrl = settings.BASE_URL;
    this.get_info();
  },
};
</script>

<style lang="less" scoped>
.full-width {
  width: 100%;
}
</style>
