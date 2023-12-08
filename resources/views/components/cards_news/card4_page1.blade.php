<!-- card of news1 -->
@include('components.popup_modal')
<section class="full_card w-[100%] h-auto">
    <div class="full_card-container" id="get_item">
        <div class="card">
            <div class="box_img">
                <a href="#"> <img src="./assets/image/image_news/card_img3" alt=""></a>
            </div>
            <div class="box_title">
                <a href="#">
                    <p class="txt1">សម្ដេចក្រឡាហោម ស ខេង និងលោកជំទាវ អញ្ជើញជាអធិបតីក្នុងពិធីក្រុងពាលី
                        និងចម្រើនព្រះបរិត្ត
                        អគារទីស្ដីការថ្មី នៃក្រសួងមហាផ្ទៃ</p>
                </a>
                <p class="txt2">ថ្ងៃព្រហស្បតិ៍ ទី១៧ ខែសីហា ឆ្នាំ២០២៣</p>
                <p class="txt3">នាព្រឹកថ្ងៃព្រហស្បតិ៍ ១កើត ខែស្រាពណ៍ ឆ្នាំថោះ បញ្ចស័ក ព.ស២៥៦៧ ត្រូវនឹងថ្ងៃទី១៧
                    ខែសីហា
                    ឆ្នាំ២០២៣នេះ សម្ដេចក្រឡាហោម ស ខេង ឧបនាយករដ្ឋមន្ត្រី រដ្ឋមន្ត្រីក្រសួងមហាផ្ទៃ និងលោកជំទាវ ញ៉ែម
                    សាខន ស ខេង បានអញ្ជើញជាអធិបតីក្នុងពិធីក្រុងពាលី និងចម្រើនព្រះបរិត្ត អគារទីស្ដីការថ្មី
                    នៃក្រសួងមហាផ្ទៃ។</p>
                <div class="btn_share">
                    <button class="btn showShareDailogBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11.293 2.293a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L13 5.414V15a1 1 0 1 1-2 0V5.414L9.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM4 11a2 2 0 0 1 2-2h2a1 1 0 0 1 0 2H6v9h12v-9h-2a1 1 0 1 1 0-2h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-9z" />
                        </svg>
                        <p class="txt_share">ចែករំលែក</p>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box_img">
                <a href="#"> <img src="./assets/image/image_news/card_img4.jpg" alt=""></a>
            </div>
            <div class="box_title">
                <a href="#">
                    <p class="txt1">សម្ដេចក្រឡាហោម ស ខេង និងលោកជំទាវ អញ្ជើញជាអធិបតីក្នុងពិធីក្រុងពាលី
                        និងចម្រើនព្រះបរិត្ត
                        អគារទីស្ដីការថ្មី នៃក្រសួងមហាផ្ទៃ</p>
                </a>
                <p class="txt2">ថ្ងៃព្រហស្បតិ៍ ទី១៧ ខែសីហា ឆ្នាំ២០២៣</p>
                <p class="txt3">នាព្រឹកថ្ងៃព្រហស្បតិ៍ ១កើត ខែស្រាពណ៍ ឆ្នាំថោះ បញ្ចស័ក ព.ស២៥៦៧ ត្រូវនឹងថ្ងៃទី១៧
                    ខែសីហា
                    ឆ្នាំ២០២៣នេះ សម្ដេចក្រឡាហោម ស ខេង ឧបនាយករដ្ឋមន្ត្រី រដ្ឋមន្ត្រីក្រសួងមហាផ្ទៃ និងលោកជំទាវ ញ៉ែម
                    សាខន ស ខេង បានអញ្ជើញជាអធិបតីក្នុងពិធីក្រុងពាលី និងចម្រើនព្រះបរិត្ត អគារទីស្ដីការថ្មី
                    នៃក្រសួងមហាផ្ទៃ។</p>
                <div class="btn_share">
                    <button class="btn showShareDailogBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11.293 2.293a1 1 0 0 1 1.414 0l3 3a1 1 0 0 1-1.414 1.414L13 5.414V15a1 1 0 1 1-2 0V5.414L9.707 6.707a1 1 0 0 1-1.414-1.414l3-3zM4 11a2 2 0 0 1 2-2h2a1 1 0 0 1 0 2H6v9h12v-9h-2a1 1 0 1 1 0-2h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-9z" />
                        </svg>
                        <p class="txt_share">ចែករំលែក</p>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- finish of news1 -->

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // popup share dailog
        var button2 = document.querySelectorAll(".showShareDailogBtn");
        var closePopupBtn2 = document.getElementById("closeShareBtn");

        button2.forEach(function(button) {
            button.addEventListener("click", function() {
                // Get the video popup element
                var sharePopup = document.querySelector(".dailog_popup");

                // Toggle the 'hidden' class to show/hide the popup
                sharePopup.classList.toggle("hidden");
            });
        });

        // JavaScript to handle the close button click event
        closePopupBtn2.addEventListener("click", function() {
            // Get the video popup element
            var sharePopup = document.querySelector(".dailog_popup");

            // Hide the popup
            sharePopup.classList.add("hidden");
        });
        // finish popup share dailog
    });
</script>
