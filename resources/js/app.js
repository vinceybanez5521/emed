const sidebarToggle = document.querySelector(".sidebar-toggle");
const sidebar = document.querySelector(".sidebar");

sidebarToggle.addEventListener("click", (e) => {
    sidebar.classList.toggle("toggled");
});

$(document).ready(function () {
    $("#deleteSpecialtyModal").on("show.bs.modal", function (event) {
        const button = $(event.relatedTarget);
        const specialtyId = button.data("specialty-id");
        const modal = $(this);

        modal.find(".modal-body #spec_id").val(specialtyId);
    });
});

import "./bootstrap";
