<template>
  <el-dialog title="Saloane" :visible.sync="showPopup" class="my-dialog-class">
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
          <el-form-item label="Denumire">
            <el-input class="full-width" v-model="selectedObject.Denumire" />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Slug">
            <el-input class="full-width" v-model="selectedObject.Slug" />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Adresa">
            <el-input class="full-width" v-model="selectedObject.Adresa" />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Telefon">
            <el-input class="full-width" v-model="selectedObject.Telefon" />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Program">
            <el-input class="full-width" v-model="selectedObject.Program" />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Gps_latitudine">
            <el-input
              class="full-width"
              v-model="selectedObject.Gps_latitudine"
            />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Gps_longitudine">
            <el-input
              class="full-width"
              v-model="selectedObject.Gps_longitudine"
            />
          </el-form-item>
        </el-col>
        <el-col :md="8">
          <el-form-item label="Afiseaza">
            <el-select class="full-width" v-model="selectedObject.Afiseaza"
              ><el-option label="Da" value="1"></el-option
              ><el-option label="Nu" value="0"></el-option>
            </el-select>
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

export default {
  name: "Saloane_dialog",
  extends: BasePage,
  components: {},
  data() {
    return {
      baseUrl: "",
      showPopup: false,
      mode: "add",
      selectedObject: {
        Denumire: "",
        Slug: "",
        Adresa: "",
        Telefon: "",
        Program: "",
        Gps_latitudine: "",
        Gps_longitudine: "",
        Afiseaza: "",
      },
      Info: {},
      rules: {
        //   Nume: [ { required: true, message: "Campul este obligatoriu" } ]
        Denumire: [{ required: true, message: "Campul este obligatoriu" }],
        Slug: [{ required: true, message: "Campul este obligatoriu" }],
        Adresa: [{ required: true, message: "Campul este obligatoriu" }],
        Telefon: [{ required: true, message: "Campul este obligatoriu" }],
        Program: [{ required: true, message: "Campul este obligatoriu" }],
        Gps_latitudine: [
          { required: true, message: "Campul este obligatoriu" },
        ],
        Gps_longitudine: [
          { required: true, message: "Campul este obligatoriu" },
        ],
        Afiseaza: [{ required: true, message: "Campul este obligatoriu" }],
      },
    };
  },
  methods: {
    show_me: async function (id) {
      this.showPopup = true;
      if (id == null) {
        this.mode = "add";
      } else {
        this.mode = "edit";
        var result = await this.post("saloane/get_info_item_dialog", {
          id: id,
        });
        this.selectedObject = result.Item;
      }
    },
    async get_info() {
      var response = await this.post("saloane/get_info_for_dialog");
    },
    save: async function () {
      this.$refs["my-form"].validate(async (valid) => {
        if (valid) {
          await this.post("saloane/save", {
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
