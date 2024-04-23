<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Admission Test</title>
    <script src="../assets/js/tailwind.js"></script>
    <link rel="stylesheet" target="_blank" href="assets/css/sidenav.css">
    <link rel="stylesheet" target="_blank" href="assets/css/table.css">
    <link rel="icon" type="image/x-icon" target="_blank" href="../assets/images/nitLogo.png">

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
                            INSTITUTE ADMISSION TEST
                        </h1>
                        <div class="sidenavElements flex flex-col-reverse md:flex-row lg:flex-col-reverse">
                            <div class="sidenavElementsLeft w-full lg:w-full ">
                                <div onclick="display('iaTest')" class="tab-links active-link flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-clipboard"></i> Institute Admission Test</p>
                                </div>
                                <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Downloads/NIT%20Sikkim%20IAT%202023%20Information%20Brochure_final.pdf" target="_blank" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-circle-info"></i> Information Brochure</p>
                                </a>
                                <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Downloads/IAT_2023%20Application%20Form.pdf" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-file"></i> Application Form</p>
                                </a>
                                <div onclick="display('iaDates')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-calendar"></i> Important Dates</p>
                                </div>
                                <a onclick="display('iaFeeDetails')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-bar-chart"></i> Fee Details</p>
                                </a>
                                <div onclick="display('iaCertificate')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-cloud-download"></i> Certificate Format</p>
                                </div>
                                <div onclick="display('iaResults')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-chart-simple"></i> Results</p>
                                </div>
                                <div onclick="display('iaContact')" class="tab-links flex border bt-1 min-w-[120px]  h-[40px] text-center items-center hover:bg-[#EFE3E3] rounded-[2px] p-3">
                                    <p><i class="fa-solid fa-question-circle"></i> Contact Us</p>
                                </div>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>




            <div class="basis-4/4 w-full p-4 sm:basis-3/4 border border-2 rounded-xl shadow-xl">

                <!-- ABOUT AND Information SECTION  -->
                <div class=" tab-contents active-tab text-justify" id="iaTest">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]"> Institute Admission Test</h1>
                    <hr>
                    <div class="iatBody p-2 flex flex-col gap-2">
                        <p class="text-md md:text-xl">
                            Applications are hereby invited from Indian nationals for admission to Self-finance Category of Post Graduate Programs (against the vacant seats available after the completion of counselling process of CCMT 2023 and CCMN 2023) and Sponsored M.Tech Programs.
                        </p>
                        <div class="admissionNotices ml-2">

                            <a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Spot%20admission%20for%20PG%20Programmes%20at%20NIT%20Sikkim.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrowLogo.png" class="h-[12px] " alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">Online Spot admission for M.Tech and M.Sc programmes at NIT Sikkim on 6th September 2023 </p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Provisionally%20Selected_Waitlisted%20Candidates%20through%20IAT%202023.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrowLogo.png" class="h-[12px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">Provisionally Selected candidates list for self-financed M.Tech. and M.Sc. Programs through IAT-2023</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="https://nitsikkim.ac.in/documents/admission/M%20Tech/2023/Admission%20Notice%20IAT%202023.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrowLogo.png" class="h-[12px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">Instructions for admission to Self-financed M.Tech. and M.Sc. Programs through IAT-2023
                                    </p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                        <div class="admissionLinks flex flex-col md:flex-row gap-4 flex-wrap items-center justify-start">
                            <div class="iatCard h-fit w-full lg:w-[45%] xl:w-[31%] h-fit border-2 rounded-xl hover:bg-[#f3f0eb] p-3 ">
                                <div class="cardTitle text-lg md:text-xl p-3 border-b-[1px]">M.Tech (Self Finance) Admissions</div>
                                <div class="cardBody p-3 textbase md:text-lg">Please read the information brochure carefully to make sure your eligibility. Pay the Application fee and proceed. Please enter your active email id and mobile number correctly.</div>
                                <div class="cardFooter p-3 flex flex-row gap-2">
                                    <a target="_blank" href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=649730" class="rounded-lg w-[100px] bg-[#921B1F] hover:bg-[#601e1F] p-2 text-white text-center">
                                        Payment
                                    </a>
                                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd1CwiwUXJusa9nq8ResGKdbzq-3Pdf52wIE4WXqMU_yrlzbw/viewform" class="rounded-lg w-[100px] bg-[#921B1F] hover:bg-[#601e1F] p-2 text-white text-center">
                                        Apply
                                    </a>
                                </div>
                            </div>
                            <div class="iatCard h-fit w-full lg:w-[45%] xl:w-[31%] h-fit border-2 rounded-xl hover:bg-[#f3f0eb] p-3 ">
                                <div class="cardTitle text-lg md:text-xl p-3 border-b-[1px]">M.Tech (Sponsored) Admissions</div>
                                <div class="cardBody p-3 textbase md:text-lg">Please read the information brochure carefully to make sure your eligibility. Pay the Application fee and proceed. Please enter your active email id and mobile number correctly.</div>
                                <div class="cardFooter p-3 flex flex-row gap-2">
                                    <a target="_blank" href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=649730" class="rounded-lg w-[100px] bg-[#921B1F] hover:bg-[#601e1F] p-2 text-white text-center">
                                        Payment
                                    </a>
                                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd1CwiwUXJusa9nq8ResGKdbzq-3Pdf52wIE4WXqMU_yrlzbw/viewform" class="rounded-lg w-[100px] bg-[#921B1F] hover:bg-[#601e1F] p-2 text-white text-center">
                                        Apply
                                    </a>
                                </div>
                            </div>
                            <div class="iatCard h-fit w-full lg:w-[45%] xl:w-[31%] h-fit border-2 rounded-xl hover:bg-[#f3f0eb] p-3 ">
                                <div class="cardTitle text-lg md:text-xl p-3 border-b-[1px]">M. Sc. Admissions</div>
                                <div class="cardBody p-3 textbase md:text-lg">Please read the information brochure carefully to make sure your eligibility. Pay the Application fee and proceed. Please enter your active email id and mobile number correctly.</div>
                                <div class="cardFooter p-3 flex flex-row gap-2">
                                    <a target="_blank" href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=649730" class="rounded-lg w-[100px] bg-[#921B1F] hover:bg-[#601e1F] p-2 text-white text-center">
                                        Payment
                                    </a>
                                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdY2YL5i4zfJm5DpjgeLBLFdabLFtYGYKbgNQxbMO0NYGWmQw/viewform" class="rounded-lg w-[100px] bg-[#921B1F] hover:bg-[#601e1F] p-2 text-white text-center">
                                        Apply
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
                <div class=" tab-contents text-justify" id="iaDates">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">Important Dates</h1>
                    <hr>
                    <ul class="pt-2 ">
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Floating of Advertisement</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 ">June 16, 2023</div>
                        </a>
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Online Application opens</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 ">June 16, 2023</div>
                        </a>
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Closing of online application</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 "><span class="line-through">July 31, 2023</span> 8th August, 2023 (Extended) </div>
                        </a>
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Publication of shortlisted candidate list for Test (Tentative)</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 ">First Week of August, 2023</div>
                        </a>
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Interview / Written Test date (Tentative):</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 ">Third week of August, 2023</div>
                        </a>
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Publication of Results (Tentative):</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 ">Third Week of August, 2023</div>
                        </a>
                        <a target="_blank" href="#" class="flex flex-col md:flex-row items-start justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-start w-full max-w-[85%]"><img src="assets/icons/calendar.png" class="h-[48px] w-[48px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Admission and Start of Class (Tentative)</p>
                            </div>
                            <div class="italic block w-full text-start md:text-end ml-3 ">Last Week of August, 2023</div>
                        </a>
                    </ul>

                </div>


                <div class=" tab-contents text-justify" id="iaFeeDetails">
                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">Fee Details</h1>
                    <hr>
                    <div class="iatFeeDetailsBody">
                        <div class="bTechFee">
                            <h2 class="text-[#921B1F] font-semibold mt-2 ml-3 p-2 text-base lg:text-xl text-center ">B.Tech Fee Structure</h2>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">B.Tech fee structure for Academic Year 2023-24</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">B.Tech fee structure for Academic Year 2022-23</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">B.Tech fee structure for Academic Year 2021-22</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                        <div class="mtechFee">
                            <h2 class="text-[#921B1F] font-semibold mt-2 ml-3 p-2 text-base lg:text-xl text-center ">M. Tech Fee Structure</h2>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Tech fee structure for Academic Year 2023-24</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Tech fee structure for Academic Year 2022-23</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Tech fee structure for Academic Year 2021-22</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                        <div class="mscFee">
                            <h2 class="text-[#921B1F] font-semibold mt-2 ml-3 p-2 text-base lg:text-xl text-center ">M. Sc. Fee Structure</h2>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2023-24</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2022-23</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2021-22</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                        <div class="phdFullFee">
                            <h2 class="text-[#921B1F] font-semibold mt-2 ml-3 p-2 text-base lg:text-xl text-center ">PhD (Full Time) Fee Structure</h2>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2023-24</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2022-23</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2021-22</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                        <div class="phdPartFee">
                            <h2 class="text-[#921B1F] font-semibold mt-2 ml-3 p-2 text-base lg:text-xl text-center ">PhD (Part Time) Fee Structure</h2>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2023-24</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">M. Sc. fee structure for Academic Year 2022-23</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                        <div class="dasaFee">
                            <h2 class="text-[#921B1F] font-semibold mt-2 ml-3 p-2 text-base lg:text-xl text-center "> DASA/ICCR/MEA/SII (International Students)</h2>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">
                                        Fee structure for International Students admitted through DASA/ICCR/MEA/SII for 2023-24</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                            <a target="_blank" href="#" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                                <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                    <p class="text-sm md:text-lg font-semibold pl-4">
                                        Fee structure for International Students admitted through DASA/ICCR/MEA/SII for 2022-23</p>
                                </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                            </a>
                        </div>
                    </div>

                </div>

                <div class=" tab-contents text-justify" id="iaCertificate">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">Certificate Format</h1>
                    <hr>
                    <ul class="pt-2 ">
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Downloads/2023/Course%20Completion%20Certificate.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Course Completion Certificate</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Downloads/2023/OBC_NCL%20Certificate.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">OBC-NCL Certificate</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Downloads/2023/SC_ST_Certificate.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">SC ST Certificate</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Downloads/2023/UNDERTAKING%20FOR%20CASTE%20VALIDITY%20CERTIFICATE%20FOR%20MAHARASHTRA%20STATE.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">Undertaking for caste validity Certificate For Maharashtra State</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                    </ul>

                </div>
                <div class=" tab-contents text-justify" id="iaResults">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">Results</h1>
                    <hr>
                    <ul class="pt-2 ">
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Result/2023/ECE_DEPT.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">List of Shortlisted/ Not Shortlisted applicants in Department of Electronics & Communication Engineering</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Result/2023/EEE_DEPT.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">List of Shortlisted/ Not Shortlisted applicants in Department of Electrical and Electronics Engineering</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Result/2023/CHEMISTRY.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">List of Shortlisted/ Not Shortlisted applicants in Department of Chemistry</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                        <a target="_blank" href="https://nitsikkim.ac.in/documents/IAT/Result/2023/CSE_DEPT.pdf" class="flex flex-row items-center justify-between p-4 rounded-lg hover:bg-[#EFE3E0]">
                            <div class="flex flex-row items-center justify-center"><img src="assets/icons/arrow.png" class="h-[24px] w-[24px]" alt="">
                                <p class="text-sm md:text-lg font-semibold pl-4">List of Shortlisted/ Not Shortlisted applicants in Department of Computer Science and Engineering</p>
                            </div><img src="assets/icons/pdfLogo.png" class="ml-2 h-[24px] w-[24px]" alt="">
                        </a>
                    </ul>

                </div>

                <div class=" tab-contents text-justify" id="iaContact">

                    <h1 class="text-center font-bold text-xl mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-3xl text-[#921B1F]">Contact Us</h1>
                    <hr>
                    <div class="flex flex-col p-2 gap-3">
                        <div class="mtechContact">
                            <h1 class="text-center font-bold text-base mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-xl text-[#921B1F]">M. Tech Admissions</h1>
                            <div class="contactDetails flex flex-row gap-3 flex-wrap items-center justify-around ">
                                <div class="contact1 rounded-lg p-3 border-2 min-w-[25%]">
                                    <p class="text-xl"><strong >For CSE : </strong></p>
                                    <p class="text-lg font-bold">Dr. Sangram Ray</p>
                                    <p class="text-base italic">Head, Department of CSE, </p>
                                    <p class="text-base"><span class="font-semibold">Contact No. :</span> +91-9635027654</p>
                                    <p class="text-base"><span class="font-semibold">Email :</span> cse_hod@nitsikkim.ac.in</p>
                                </div>
                                <div class="contact2 rounded-lg p-3 border-2 min-w-[25%]">
                                    <p class="text-xl"><strong >For ECE : </strong></p>
                                    <p class="text-lg font-bold">Dr. Sanjay Kumar Jana</p>
                                    <p class="text-base italic">Head, Department of ECE, </p>
                                    <p class="text-base"><span class="font-semibold">Contact No. :</span>  +91-9476102775</p>
                                    <p class="text-base"><span class="font-semibold">Email :</span> ece_hod@nitsikkim.ac.in</p>
                                </div>
                                <div class="contact3 rounded-lg p-3 border-2 min-w-[25%]">
                                    <p class="text-xl"><strong >For EEE : </strong></p>
                                    <p class="text-lg font-bold">Dr. Aurobinda Panda</p>
                                    <p class="text-base italic">Head, Department of EEE, </p>
                                    <p class="text-base"><span class="font-semibold">Contact No. :</span>  +91-8001057780</p>
                                    <p class="text-base"><span class="font-semibold">Email :</span> eee_hod@nitsikkim.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="mscContact ">
                            <h1 class="text-center font-bold text-base mt-5 mb-2 sm:mt-0 sm:mb-3 sm:text-xl text-[#921B1F]">M. Sc. Admissions</h1>
                            <div class="contactDetails flex flex-row gap-3 flex-wrap items-center justify-around ">
                                <div class="contact1 rounded-lg p-3 border-2 min-w-[25%]">
                                    <p class="text-lg font-bold">Dr. Achintesh Narayan Biswas</p>
                                    <p class="text-base italic">Head, Department of Chemistry, </p>
                                    <p class="text-base"><span class="font-semibold">Contact No. :</span> +91-9434377238</p>
                                    <p class="text-base"><span class="font-semibold">Email :</span> hod.chemistry@nitsikkim.ac.in</p>
                                </div>
                            </div>
                        </div>

                        <p>For any technical queries, email to <a target="_blank" href="mailto:IAT@nitsikkim.ac.in" class="text-blue-500">IAT@nitsikkim.ac.in</a></p>

                    </div>

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