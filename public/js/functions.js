function alerts(alert) {
  const defaults = {
    position: "center",
    showConfirmButton: false,
    timer: 1200,
    allowOutsideClick: false,
  };

  if (alert.type == "success") {
    Swal.fire({
      icon: "success",
      text: alert.text,
      ...defaults,
      willClose: () => {
        location.reload();
      },
    });
  } else if (alert.type == "error") {
    Swal.fire({
      icon: "error",
      text: alert.text,
      ...defaults,
      willClose: () => {
        location.reload();
      },
    });
  } else if (alert.type == "function") {
    Swal.fire({
      icon: alert.icon,
      text: alert.text,
      ...defaults,
      willClose: () => {
        alert.callback();
      },
    });
  }else if (alert.type == "normal") {
    Swal.fire({
      icon: alert.icon,
      text: alert.text,
      ...defaults,
    });
  }
}