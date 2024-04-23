<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhD Admissions</title>
    <script src="../assets/js/tailwind.js"></script>
    <link rel="stylesheet" href="assets/css/sidenav.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/nitLogo.png">

    <script src="https://kit.fontawesome.com/3f58f1536b.js" crossorigin="anonymous"></script>
</head>

<body>

    <style>
        .active-link {
            background-color: #7A211E;
            color: white;
        }

        .tab-links:hover {
            background-color: #EFE3E3;
            color: black;
        }
    </style>
    <?php include '../include/header/header.php'; ?>
    <div class="bg-white p-4">

        <div class="flex gap-2 flex-col-reverse lg:flex-row">

            <div class="flex">

                <div class=" sticky flex-none w-[350px] max-lg:w-[100%]  max-lg:mx-auto  border-1 text-xs md:text-sm">

                    <ul class="bg-[#FFFDFD] flex flex-col drop-shadow-[4px_4px_4px_rgba(0,0,0,0.25)] h-fit w-[fit]">
                        <h1 class="flex min-w-[120px]  h-[50px] font-bold  justify-center items-center  rounded-[2px] uppercase text-[#921B1F] text-center text-lg md:text-2xl">
                            PhD
                        </h1>
                        <div class="sidenavElements flex flex-col-reverse md:flex-row lg:flex-col-reverse">
                            <div class="sidenavElementsLeft w-full lg:w-full ">
                                <div onclick="display('btechAdmissions')" class="tab-links active-link flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-users"></i> PhD Admissions</p>
                                </div>
                                <div onclick="display('btechNotices')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-circle-info"></i> PhD Notices</p>
                                </div>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>




            <div class="basis-4/4 w-full p-4 sm:basis-3/4 border border-2 rounded-xl shadow-xl">

                <!-- ABOUT AND Information SECTION  -->
                <div class=" tab-contents active-tab text-justify" id="btechAdmissions">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]"> PhD Notices</h1>
                    <hr>
                    <ul class="pt-2 font-semibold">
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">Advertisement for PhD Admission, Phase II, Odd Semester, AY 2023-2024</li></div>
                        <ul class="pl-4">
                            <a href="https://nitsikkim.ac.in/documents/admission/PhD/2023-2024_odd/Information%20Brochure%20Admission_NIT%20Sikkim_2023-2024%20Odd%20Semester.pdf" class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px] " alt="arrowLogo">Information Brochure</li></a>
                            <a href="https://nitsikkim.ac.in/documents/admission/PhD/2023-2024_odd/Advt_PhD%20Admission_NIT%20Sikkim_2023-24%20Odd%20Semester%20Phase%20II.pdf" class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px] " alt="arrowLogo">Advertisement</li></a>
                            <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px] " alt="arrowLogo">Application Form <a href="https://nitsikkim.ac.in/documents/admission/PhD/2023-2024_odd/Application%20Form%20Admission_NIT%20Sikkim_2023-2024%20Odd%20Semester%20Phase%20II.pdf">PDF</a>/<a href="https://nitsikkim.ac.in/documents/admission/PhD/2023-2024_odd/Application%20Form%20Admission_NIT%20Sikkim_2023-2024%20Odd%20Semester%20Phase%20II.doc">Word</a></li></div>
                        </ul>
                    </ul>


                </div>
                <div class=" tab-contents text-justify" id="btechNotices">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">PhD Notices</h1>
                    <hr>
                    <ul class="pt-2 font-semibold">
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">PROVISIONALLY Shortlisted, Not-Shortlisted 10th August, 2023</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2023-2024_odd/Phase2/PROVISIONALLY%20Shortlisted,%20Not-Shortlisted%2010th%20August,%202023.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">Provisionally Selected Candidates for PhD admission</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/Scanned%20PhD%20Final%20Provisionally%20Selected.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">ME PhD Shortlisted Candidates after First Round of Written Test</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/PhD_ME_2ndround_List.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">Physics PhD Shortlisted Candidates after First Round of Written Test</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/Candidates%20after%20first%20round%20for%20online%20interview.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">EEE PhD Shortlisted Candidates after First Round of Written Test</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/SHortList_1st_Phase@EEED_PhD_2022.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">Chemistry PhD Shortlisted Candidates after First Round of Written Test</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/Chemistry%20PhD%20Odd%202022%20-%20Shortlisted%20Candidates%20for%20Personal%20Interview.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">CSE PhD Shortlisted Candidates after First Round of Written Test</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/Scanned%20Shortlisted%20Candidates%20PhD%20Written%20Test.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px]" alt="arrow">HSS PhD Shortlisted Candidates after First Round of Written Test</li><a href="https://nitsikkim.ac.in/documents/admission/PhD/2022/Result_HSS_PhD_Round_1.pdf" target="_blank"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <!-- JS CODE -->
    </div>
    </div>
    <script src="assets/js/sidenav.js"></script>
</body>
<?php include '../include/footer.php' ?>

</html>
