const sidebarToggle = document.querySelector(".sidebar-toggle");
const sidebar = document.querySelector(".sidebar");

if (sidebarToggle) {
    sidebarToggle.addEventListener("click", (e) => {
        sidebar.classList.toggle("toggled");
    });
}

$(document).ready(function () {
    $("#deleteSpecialtyModal").on("show.bs.modal", function (event) {
        const button = $(event.relatedTarget);
        const specialtyId = button.data("specialty-id");
        const modal = $(this);

        modal.find(".modal-body #spec_id").val(specialtyId);
    });

    $("#deleteAppointmentModal").on("show.bs.modal", function (event) {
        const button = $(event.relatedTarget);
        const appointmentId = button.data("appointment-id");
        const modal = $(this);

        console.log(appointmentId);

        modal.find(".modal-body #appoint_id").val(appointmentId);
    });
});

import "./bootstrap";
