const app = {
  routes: {
    /* VIEWS */
    home: "http://soa.com/",
    addQueja: "/Quejas/createQuejas",
  },

  addQueja: function () {
    const aqf = $("#add-queja-form");

    aqf.on("submit", function (e) {
      e.preventDefault();
      e.stopPropagation();
      const comentario = $("#queja").val().trim();
      if (comentario === "") {
        alerts({
            type: "function",
            icon: "error",
            text: "Campo no puede estar vacío o contener solo espacios.",
            callback: function () {
              aqf[0].reset();
            },
          });
        return; 
      }
      const data = new FormData(this);
      fetch(app.routes.addQueja, {
        method: "POST",
        body: data,
      })
        .then((res) => res.json())
        .then((res) => {
          if (res.r === true) {
            alerts({
              type: "success",
              text: "Comentario añadido correctamente",
            });
          } else if (res.r === "e") {
            alerts({
              type: "function",
              icon: "error",
              text: "Campo no puede estar vacío",
              callback: function () {
                aqf[0].reset();
              },
            });
          }
        })
        .catch(() => {
          alerts({
            type: "error",
            text: "Error inesperado, intente de nuevo",
          });
        });
    });
  },
};
