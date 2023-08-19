async function submitForm(url) {
  console.log(url);
  let obj = {
    select: document.getElementById("select-optiuni").value,
    nume: document.getElementById("nume-formular").value,
    telefon: document.getElementById("telefon-formular").value,
    email: document.getElementById("email-formular").value,
  };

  if (validation(obj)) {
    let res = await fetch(url + "trimite-formular", {
      method: "POST",
      headers: {
        "Content-type": "application/json",
      },
      body: JSON.stringify(obj),
    });

    let data = await res.json();

    console.log(data);
    if (data.succes) {
      await Swal.fire({
        title: "Succes!",
        text: "Cererea de contact a fost trimisă cu succes!",
        icon: "success",
        allowOutsideClick: false,
        allowEscapeKey: false,
      }).then((isConfirm) => {
        // console.log(isConfirm);
        if (isConfirm) {
          window.location.reload();
        }
      });
    } else {
      Swal.fire({
        title: "Eroare!",
        text: "A intervenit o eroare în trimiterea cererii de contact!",
        icon: "error",
        confirmButtonText: "Ok",
      });
    }
  } else return;
}

function validation(obj) {
  // console.log(Object.keys(obj));
  let status = true;
  Object.keys(obj).forEach((key) => {
    if (obj[key] == "" || obj[key].length <= 0) {
      let element = document.getElementById(`error-${key}`);
      element.style.display = "block";
      status = false;
    } else {
      let element = document.getElementById(`error-${key}`);
      element.style.display = "none";
    }
  });

  return status;
}
