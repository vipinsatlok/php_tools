<?php 
$title = "Contact | Vipin Tools";
include '../parts/head.php'; ?>

<!-- contact title -->
<div>
    <h1 class="text-3xl font-bold dark:text-white">Contact Us</h1>
    <p class="mb-6 text-md font-normal text-gray-500 lg:text-xl dark:text-gray-400">
        If you have any questions, feedback, or need support, feel free to reach out to us. We'd love to hear from you!
    </p>
</div>

<div class="grid grid-cols-1 gap-5 md:grid-cols-2 items-start">
    <!-- conatct form -->
    <div>
        <input type="text" id="name" aria-describedby="helper-text-explanation" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full max-w-[500px] p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Name">
        <input type="email" id="email" aria-describedby="helper-text-explanation" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full max-w-[500px] p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Email">
        <input type="text" id="subject" aria-describedby="helper-text-explanation" class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full max-w-[500px] p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Subject">
        <textarea id="message" rows="4" class="block mb-3 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Message..."></textarea>
        <?php 
            $buttonText = "Send Message";
            $buttonId = "sendButton";
            $buttonSvg = '<svg width="18px"  viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.455 9.8834L7.063 4.1434C6.76535 3.96928 6.40109 3.95274 6.08888 4.09916C5.77667 4.24558 5.55647 4.53621 5.5 4.8764C5.5039 4.98942 5.53114 5.10041 5.58 5.2024L7.749 10.4424C7.85786 10.7903 7.91711 11.1519 7.925 11.5164C7.91714 11.8809 7.85789 12.2425 7.749 12.5904L5.58 17.8304C5.53114 17.9324 5.5039 18.0434 5.5 18.1564C5.55687 18.4961 5.77703 18.7862 6.0889 18.9323C6.40078 19.0785 6.76456 19.062 7.062 18.8884L18.455 13.1484C19.0903 12.8533 19.4967 12.2164 19.4967 11.5159C19.4967 10.8154 19.0903 10.1785 18.455 9.8834V9.8834Z" stroke="#ffffff" stroke-width="1.325" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';
            $onClick = "sendMessage";
            include '../parts/button.php'; 
        ?>
    </div>

    <!-- contact information -->
    <div class="mt-10 md:mt-0">
        <h1 class="text-xl font-bold dark:text-white">Contact Information</h1>
        <p class="mt-3 mb-2 text-sm font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            <span class="font-semibold item-center flex" >
                <svg width="18px" class="mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#723c3c" stroke-width="0.984" stroke-linecap="round" stroke-linejoin="round"></path> <rect x="3" y="5" width="18" height="14" rx="2" stroke="#723c3c" stroke-width="0.984" stroke-linecap="round"></rect> </g></svg>
                Email
            </span>
            <a href="vipinsatlok@gmail.com">vipindass@help.com</a>
        </p>
        <p class="mt-3 mb-2 text-sm font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            <span class="font-semibold item-center flex" >
            <svg width="18px"  class="mr-2"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#723c3c" stroke-width="1.128" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#723c3c" stroke-width="1.128" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                Adress
            </span>
            Lucknow, Uttar Pradesh, India
        </p>
        <p class="mt-3 mb-2 text-sm font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            <span class="font-semibold item-center flex" >
            <svg width="18px"  class="mr-2"  viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#723c3c" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z" fill="#723c3c"></path> </g></svg>
                Whatsapp
            </span>
            <a href="wa.me/917652027773">+91 76520 27773</a>
        </p>
    </div>
</div>

<?php include '../parts/footer.php'; ?>
<script src="./contact/script.js"></script>
<?php include '../parts/foot.php'; ?>