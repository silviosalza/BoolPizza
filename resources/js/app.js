import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);


const deleteBtns = document.querySelectorAll(".btn-delete");

if (deleteBtns.length > 0) {
    deleteBtns.forEach((btn) => {
        btn.addEventListener("click", function (event) {
            event.preventDefault();
            const pizzaTitle = btn.getAttribute("data-pizza-name");

            const deleteModal = new bootstrap.Modal(
                document.getElementById("delete-modal")
            );
            document.getElementById("pizza-name").innerText = pizzaTitle;

            document
                .getElementById("action-delete")
                .addEventListener("click", function () {
                    btn.parentElement.submit();
                });

            deleteModal.show();
        });
    });
}