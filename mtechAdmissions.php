<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.Tech Admissions</title>
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
                                M.TECH
                            </h1>
                            <div class="sidenavElements flex flex-col-reverse md:flex-row lg:flex-col-reverse">
                                <div class="sidenavElementsLeft w-full lg:w-full ">
                                    <div onclick="display('mtechAdmissions')" class="tab-links active-link flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                        <p><i class="fa-solid fa-users"></i> M.Tech Admissions</p>
                                    </div>
                                    <div onclick="display('mtechNotices')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                        <p><i class="fa-solid fa-circle-info"></i> M.Tech Notices</p>
                                    </div>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>




                <div class="basis-4/4 w-full p-4 sm:basis-3/4 border border-2 rounded-xl shadow-xl">

                    <!-- ABOUT AND Information SECTION  -->
                    <div class=" tab-contents active-tab text-justify" id="mtechAdmissions">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]"> M.Tech Admissions</h1>
                        <hr>
                        <div class="btechAdmit grid grid-cols-1 md:grid-cols-2 items-center justify-around gap-4 pt-2 ">
                            <a href="http://ccmt.nic.in/" class="card h-full p-2 rounded-xl border-2 ccmt hover:bg-[#f3f0eb]">
                                <div class="ccmtImage w-full flex flex-row items-center justify-center ">
                                    <img src="assets/images/ccmtLogo.png" class="h-[250px]">
                                </div>
                                <hr>
                                <div class="font-bold text-lg md:text-xl p-2 lg:text-2xl text-center ">CCMT 2023 - Centralized Counseling for M.Tech - 2023</div>
                            </a>
                            <a href="iat.php" class="card h-full p-2 rounded-xl border-2 iat hover:bg-[#f3f0eb]">
                                <div class="nitLogo w-full flex flex-row items-center justify-center p-2  ">
                                    <img src="assets/images/NITLogo.svg" class="h-[250px]">
                                </div>
                                <hr>
                                <div class="font-bold text-lg md:text-xl p-2 lg:text-2xl text-center ">Institute Admission Test (IAT) - 2023</div>
                            </a>
                        </div>
                        
                    </div>
                    <div class=" tab-contents text-justify" id="mtechNotices">

                        <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">M.Tech Notices</h1>
                        <hr>
                        <ul class="font-semibold">
                            <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">Online Spot admission for M.Tech and M.Sc programmes at NIT Sikkim on 6th September 2023</li><a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Spot%20admission%20for%20PG%20Programmes%20at%20NIT%20Sikkim.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                            <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">Provisionally Selected candidates list for self-financed M.Tech. and M.Sc. Programs through IAT-2023</li><a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Provisionally%20Selected_Waitlisted%20Candidates%20through%20IAT%202023.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                            <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">Instructions for admission to Self-financed M.Tech. and M.Sc. Programs through IAT-2023</li><a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Admission%20Notice%20IAT%202023.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                            <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">List of Shortlisted/ Not Shortlisted applicants for IAT, 2023 (M.Tech and M.sc)</li></div>
                            <ul class="pl-4">
                                <div class="text-xs md:text-lg flex flex-row items-center p-2 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px]" alt="arrowLogo">List of Shortlisted/ Not Shortlisted applicants in Electronics & Communication Engineering Department</li><a href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Result/ECE_DEPT.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
	                            <div class="text-xs md:text-lg flex flex-row items-center p-2 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px]" alt="arrowLogo">List of Shortlisted/ Not Shortlisted applicants Department of Electrical & Electronics Engineering</li><a href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Result/EEE_DEPT.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
	                            <div class="text-xs md:text-lg flex flex-row items-center p-2 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px]" alt="arrowLogo">List of Shortlisted/ Not Shortlisted applicants Department of Computer Science & Engineering</li><a href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Result/CSE_DEPT.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
	                            <div class="text-xs md:text-lg flex flex-row items-center p-2 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrowLogo.png" class="h-[16px] w-[12px]" alt="arrowLogo">List of Shortlisted/ Not Shortlisted applicants Department of Chemistry</li><a href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Result/CHEMISTRY.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                            </ul>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">Notice for CCMT-CCMN 2023 ( M.Tech & M.Sc) Physical Reporting at NIT Sikkim 17 to 21 August 2023</li><a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Notice%20for%20CCMT-CCMN%202023%20_%20M.Tech%20_%20M.Sc_%20Physical%20Reporting%20at%20NIT%20Sikkim%2017%20to%2021%20August%202023_%20new.pdf"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
                        <div class="text-xs md:text-lg flex flex-row items-center p-3 hover:bg-[#EFE3E0] rounded-xl"><li class="flex flex-row items-center w-full gap-2 cursor-pointer transition-colors p-2"><img src="assets/icons/arrow.png" class="h-[20px] w-[20px] lg:h-[24px] lg:w-[24px] " alt="arrow">The last date for submission of the online application form for admission to the PG programs (M.Tech and M.Sc.) through IAT 2023 has been extended till 8th August 2023</li><a target="_blank" href="https://nitsikkim.ac.in/admission/beta/"><img src="assets/icons/pdfLogo.png" alt=""  class="basis-[3%] h-7 cursor-pointer hover:scale-110 transition-scale"></a></div>
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