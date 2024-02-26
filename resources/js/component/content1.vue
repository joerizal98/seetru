<template>
    <div>
        <div class="content-container">
            <div class="left-content card">
                <div class="logo-container">
                    <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2" style="align-self: left; margin-top: -10px;">
                    <h1 class="credible-header" style="margin-left: 15px;">About PSIFIs</h1>
                </div>
                <br>

                <h2 class="credible-header">A Credible and Accurate Islamic Finance Database</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                    et dolore magna aliquyam erat, sed diam voluptua.</p>
                <img :src="logoPath" alt="Logo" class="h-15 w-auto mt-4">
                <p class="location-text text-center mt-4">IFSB HQ KUALA LUMPUR, MALAYSIA</p>
            </div>

            <div class="right-content card">
                <div class="links">
                    <ul class="flex flex-wrap space-x-4 justify-center">
                        <li><router-link to="/vision" class="link selected-link">Vision</router-link></li>
                        <li><router-link to="/mission" class="link">Mission</router-link></li>
                        <li><router-link to="/core-values" class="link selected-link">Core Values</router-link></li>
                        <li><router-link to="/objective" class="link selected-link">Objective</router-link></li>
                        <li><router-link to="/moto" class="link selected-link">Moto</router-link></li>
                    </ul>
                </div>
                <div class="mission-description">
                    <p>The mission of the IFSB is to promote the stability and resilience of the Islamic financial services
                        industry. The IFSB seeks to achieve its mission through the issuance, and facilitating the
                        implementation, of global and prudential and supervisory standards and other initiatives that foster
                        knowledge sharing and cooperation.</p>
                </div>
                <div class="additional-text">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore</p>
                </div>
            </div>
        </div>
        <div class="centered-content">
            <div class="content-container">
                <div class="left-content card"
                    style="background-image: url('/images/bg2.png'); background-size: cover; background-position: center;">
                    <div class="logo-container">
                        <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2" style="align-self: left; margin-top: -10px;">
                        <h1 class="credible-header" style="margin-left: 15px; color: white;">Timeline</h1>
                    </div>
                    <br>

                    <h2 class="credible-header" style="color: white;">Lorem ipsum dolor sit amet, consetetur sadipscing</h2>
                    <p style="color: white;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                        dolor sit amet</p>
                </div>

            </div>
        </div>
        <div class="centered-content">
            <div class="half-card">
                <div class="timeline-container">
                    <div class="timeline-years">
                        <div class="timeline-year">
                            <h3 class="text1">1993</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                        <div class="timeline-year">
                            <h3 class="text1">1998</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                        <div class="timeline-year">
                            <h3 class="text1">2000</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                        <div class="timeline-year">
                            <h3 class="text1">2005</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                        <div class="timeline-year">
                            <h3 class="text1">2010</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                        <div class="timeline-year">
                            <h3 class="text1">2013</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                        <div class="timeline-year">
                            <h3 class="text1">2018</h3>
                            <p class="text1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</p>
                        </div>
                    </div>
                    <div class="horizontal-line"></div>
                    <div class="timeline-events">
                        <div class="timeline-event"></div>
                        <div class="timeline-event"></div>
                        <div class="timeline-event"></div>
                        <div class="timeline-event"></div>
                        <div class="timeline-event"></div>
                        <div class="timeline-event"></div>
                        <div class="timeline-event"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="centered-content white-bg">
            <div class="content-container">
                <div class="third-content card white-bg flex items-center">
                    <div class="logo-container">
                        <div class="logo-container">
                            <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2" style="margin-right: 15px;">
                            <h1 class="credible-header custom-text" style="margin: 10px;">Key Strategic Focus Areas</h1>
                            <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2 mirrored-image" style="margin-left: 15px;">
                        </div>
                    </div>
                    <p
                        class="text-center text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 ml-10">
                        The strategic focus areas of the former SPP, which was aligned with the vision, mission and core
                        values of the IFSB, is illustrated below. The EC in its meetings, resolved for the Secretariat to
                        maintain the below framework for the new SPP 2022-2024, but with greater emphasis on the quality of
                        outputs and greater focus on member engagement as well as outcome measurement and reporting.
                    </p>
                    <img :src="chartPath" alt="Logo" class="h-780 w-1049 mt-2" style="margin-right: 15px;">
                </div>
            </div>
        </div>

        <div class="left-content card"
            style="background-image: url('/images/bg3.png'); background-size: cover; background-position: center;">
            <div class="white-bg">
                <div class="content-container justify-start"> 
                    <div class="fourth-content card white-bg"> 
                        <div class="logo-container">
                            <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2" style="margin-right: 1px;">
                            <h1 class="credible-header" style="margin-left: 1px; display: inline;"> Governing Documents</h1>
                        </div>
                        <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 ml-1">
                            The functions and activities of the IFSB are governed by four Main Documents.
                        </p>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="centered-content">
                    <div class="content-container justify-start flex-wrap">
                        <div class="card mr-4">
                            <img :src="card1" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">Document
                            </p>
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">Articles
                                of Agreement</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 2H2a1 1 0 00-1 1v16a1 1 0 001 1h16a1 1 0 001-1V3a1 1 0 00-1-1zM7 4h6v1H7V4zm10 2H3v12h14V6zm-7 5a1 1 0 00-1-1V7a1 1 0 112 0v3a1 1 0 00-1 1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 mr-2">
                                    November 2018</p>
                            </div>
                        </div>

                        <div class="card mr-4">
                            <img :src="card2" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">Document
                            </p>
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">IFSB Act
                                2002</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 2H2a1 1 0 00-1 1v16a1 1 0 001 1h16a1 1 0 001-1V3a1 1 0 00-1-1zM7 4h6v1H7V4zm10 2H3v12h14V6zm-7 5a1 1 0 00-1-1V7a1 1 0 112 0v3a1 1 0 00-1 1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 mr-2">
                                    September 2002</p>
                            </div>
                        </div>

                        <div class="card mr-4">
                            <img :src="card3" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">Document
                            </p>
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">IFSB
                                By-Laws</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 2H2a1 1 0 00-1 1v16a1 1 0 001 1h16a1 1 0 001-1V3a1 1 0 00-1-1zM7 4h6v1H7V4zm10 2H3v12h14V6zm-7 5a1 1 0 00-1-1V7a1 1 0 112 0v3a1 1 0 00-1 1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 mr-2">
                                    November 2018</p>
                            </div>
                        </div>

                        <div class="card mr-4">
                            <img :src="card4" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">Document
                            </p>
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">
                                Guidelines and Procedures</p>
                            <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700">for the
                                Preparation of Standards/Guidelines</p>
                            <div class="flex items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 2H2a1 1 0 00-1 1v16a1 1 0 001 1h16a1 1 0 001-1V3a1 1 0 00-1-1zM7 4h6v1H7V4zm10 2H3v12h14V6zm-7 5a1 1 0 00-1-1V7a1 1 0 112 0v3a1 1 0 00-1 1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 mr-2">
                                    September 2002</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="centered-content white-bg">
            <div class="content-container">
                <div class="third-content card white-bg flex items-center">
                    <div class="logo-container">
                        <div class="logo-container">
                            <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2" style="margin-right: 15px;">
                            <h1 class="credible-header custom-text" style="margin: 10px;">Secretary General</h1>
                        </div>
                    </div>
                    <img :src="imgPath" alt="Logo" class="h-500 w-500 mt-2" style="margin-right: 900px;">
                    <h2 class="credible-header">Dr. Bello Lawal Danbatta was appointed the Secretary-General of the IFSB
                        effective 29 January 2018.</h2>
                    <p
                        class="text-center text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 ml-10">
                        Dr. Danbatta, previously the Director of the Centre of Consultancy and Executive Programmes at
                        INCEIF, has over 26 years combined experience in the private, academia, as well as in the financial
                        services regulation and supervision sectors across Africa, Europe, Asia and the Middle East. He is a
                        Member of the Accounting and Auditing Board of Accounting and Auditing Organisation for Islamic
                        Financial Institutions (AAOIFI), the Basel Consultative Group (BCG), the International Ethics
                        Standards Board for Accountants (IESBA), the International Auditing and Assurance Standards Board
                        (IAASB) and has chaired various working groups for the issuance of financial accounting standards
                        for Islamic financial institutions. He has also been involved in the development and drafting of
                        standards, guidelines and frameworks for capital adequacy, accounting, as well as supervision and
                        regulation of Islamic finance for various countries. 
                        <br>
                        <br>
                        Dr. Danbatta holds a Ph.D. in Islamic Banking
                        and Finance from the International Islamic University Malaysia (IIUM), and an MBA in Corporate
                        Finance. He is a Chartered Accountant (Fellow) with the Association of Certified Chartered
                        Accountant (ACCA-UK), a Licensed International Financial Analyst (LIFA-UK), and a member of the
                        Chartered Institute of Islamic Finance Professionals (CIIFP), Member of Nigerian Institute of
                        Management (NIM), Institute of Chartered Accountants of Nigeria (ICAN), and International Council
                        for Islamic Finance Educators (ICIFE). Dr. Danbatta is a known Islamic banking and finance
                        consultant, and has been active in providing Islamic finance training and consultancy to central
                        banks, securities commissions, deposit insurance corporations and Islamic banks. He also has a
                        number of publications on Islamic banking, corporate governance and earnings management. 
                        <br>
                        In addition
                        to these corporate engagements, he also held the positions of Assistant Professor at Sultan Qaboos
                        University Oman, a Research Fellow at the Accounting Research Institute (ARI) of University
                        Technology MARA (UiTM), Malaysia and Academic Fellow at Insaniah University Malaysia. He has worked
                        with the Highland Bank of Nigeria Plc, Peugeot Automobiles and Securities and Exchange Commission of
                        Nigeria.
                    </p>
                </div>
            </div>
        </div> -->

        <div class="content-container">
            
            <div class="left-content card">
                <div class="logo-container">
                    <img :src="barPath" alt="Logo" class="h-3 w-19 mt-2" style="align-self: left; margin-top: -10px;">
                    <h1 class="credible-header" style="margin-left: 15px;">Secretary General</h1>
                </div>
                <div class="logo-container">
                    <img :src="imgPath" alt="Logo" class="h-500 w-500 mt-2" style="margin-right: 900px;">
                </div>
                <br>

                
            </div>

            <div class="right-content card">
                <h2 class="credible-header">Dr. Bello Lawal Danbatta was appointed the Secretary-General of the IFSB
                        effective 29 January 2018.</h2>
                    <p
                        class="text-center text-base font-poppins font-normal leading-6 tracking-tighter text-gray-700 ml-10">
                        Dr. Danbatta, previously the Director of the Centre of Consultancy and Executive Programmes at
                        INCEIF, has over 26 years combined experience in the private, academia, as well as in the financial
                        services regulation and supervision sectors across Africa, Europe, Asia and the Middle East. He is a
                        Member of the Accounting and Auditing Board of Accounting and Auditing Organisation for Islamic
                        Financial Institutions (AAOIFI), the Basel Consultative Group (BCG), the International Ethics
                        Standards Board for Accountants (IESBA), the International Auditing and Assurance Standards Board
                        (IAASB) and has chaired various working groups for the issuance of financial accounting standards
                        for Islamic financial institutions. He has also been involved in the development and drafting of
                        standards, guidelines and frameworks for capital adequacy, accounting, as well as supervision and
                        regulation of Islamic finance for various countries. 
                        <br>
                        <br>
                        Dr. Danbatta holds a Ph.D. in Islamic Banking
                        and Finance from the International Islamic University Malaysia (IIUM), and an MBA in Corporate
                        Finance. He is a Chartered Accountant (Fellow) with the Association of Certified Chartered
                        Accountant (ACCA-UK), a Licensed International Financial Analyst (LIFA-UK), and a member of the
                        Chartered Institute of Islamic Finance Professionals (CIIFP), Member of Nigerian Institute of
                        Management (NIM), Institute of Chartered Accountants of Nigeria (ICAN), and International Council
                        for Islamic Finance Educators (ICIFE). Dr. Danbatta is a known Islamic banking and finance
                        consultant, and has been active in providing Islamic finance training and consultancy to central
                        banks, securities commissions, deposit insurance corporations and Islamic banks. He also has a
                        number of publications on Islamic banking, corporate governance and earnings management. 
                        <br>
                        In addition
                        to these corporate engagements, he also held the positions of Assistant Professor at Sultan Qaboos
                        University Oman, a Research Fellow at the Accounting Research Institute (ARI) of University
                        Technology MARA (UiTM), Malaysia and Academic Fellow at Insaniah University Malaysia. He has worked
                        with the Highland Bank of Nigeria Plc, Peugeot Automobiles and Securities and Exchange Commission of
                        Nigeria.
                    </p>
                
                
               
            </div>
        </div>
        <div class="box">
    <h1 class="credible-header" style="margin-left: 565px;">Former Secretary-General</h1>
    <br>
    <div class="centered-content">
        <div class="content-container justify-start flex-wrap">
            <div class="card mr-4 relative"> 
                <div class="bg-blue-700 text-white p-2 absolute top-0 left-0 font-poppins">2018- Current</div> 
                <img :src="imgPath" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
            </div>

            <div class="card mr-4 relative"> 
                <div class="bg-blue-700 text-white p-2 absolute top-0 left-0 font-poppins">2011 - 2017</div> 
                <img :src="imgPath2" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
            </div>

            <div class="card mr-4 relative"> 
                <div class="bg-blue-700 text-white p-2 absolute top-0 left-0 font-poppins">2003 - 2011</div> 
                <img :src="imgPath3" alt="Logo" class="h-64 w-64 mt-2" style="margin-right: 15px;">
            </div>
        </div>
    </div>
    <br>
</div>






    </div>
</template>
  
<script>
export default {
    data() {
        return {
            barPath: "/images/bar.svg",
            logoPath: "/images/ss1.png",
            chartPath: "/images/chart1.png",
            card1: "/images/s1.png",
            card2: "/images/s2.png",
            card3: "/images/s3.png",
            card4: "/images/s4.png",
            imgPath: "/images/gmbr.png",
            imgPath2: "/images/gmbr2.png",
            imgPath3: "/images/gmbr3.png"
        }
    },
    name: 'ContentPage'
};
</script>
  
<style scoped>
.box {
    background: #FFFFFF;
    opacity: 1;
}


.flex-wrap {
    display: flex;
    flex-wrap: wrap;
}

.mirrored-image {
    transform: scaleX(-1);
}


.white-bg {
    background-color: white;
}

.third-content {
    text-align: center;
    margin: auto;
    max-width: 800px;
    padding: 20px;
}

.content-container {
    display: flex;
    flex-wrap: wrap;
}

.logo-container {
    text-align: center;
    display: flex;
    align-items: center;
}

.centered-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.half-card {
    width: calc(100% - 1px);
    max-width: 1300px;
    height: 485px;
    background: #FFFFFF;
    box-shadow: 0px 5px 15px #5A8AE31C;
    border: 1px solid #E6EFFF;
    border-radius: 15px;
    padding: 20px;
    margin-top: 20px;
    position: relative;
}

.timeline-container {
    position: relative;
    overflow-x: auto;
}

.horizontal-line {
    position: absolute;
    width: 1250px;
    height: 3px;
    background-color: #E6EFFF;
    border-radius: 50%;
}


.timeline-years {
    display: flex;
    justify-content: space-between;
    padding: 20px 0;
}

.timeline-year {
    font-size: 12px;
    color: #000;
    position: relative;
}

.timeline-events {
    display: flex;
    justify-content: space-between;
}

.timeline-event {
    width: 20px;
    height: 20px;
    background-color: #E6EFFF;
    border-radius: 50%;
    position: relative;
    top: -10px;

}

.left-content {
    flex: 1;
    padding: 20px;
}

.right-content {
    flex: 1;
    padding: 20px;
}

.links ul {
    list-style-type: none;
    padding: 0;
}

.link {
    text-align: center;
    font: normal normal 600 16px/35px Poppins;
    letter-spacing: 0.77px;
    color: #4E4E50;
    text-transform: capitalize;
    opacity: 1;
    position: relative;
}

.link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 2px;
    background-color: rgb(204, 204, 16);
}

.selected-link::after {
    background-color: transparent;
}

.mission-description h3 {
    margin-top: 20px;
    margin-bottom: 10px;
    text-align: left;
    font: normal normal normal 16px/25px Poppins;
    letter-spacing: 0.77px;
    color: #4E4E50;
    opacity: 1;
}

.additional-text {
    margin-top: 20px;
}

.credible-header {
    text-align: left;
    font: normal normal bold 26px/35px Poppins;
    letter-spacing: 1.3px;
    color: #202B3B;
    opacity: 1;
}

.credible-header-right {
    text-align: center;
    font: normal normal bold 26px/35px Poppins;
    letter-spacing: 1.3px;
    color: #202B3B;
    opacity: 1;
}

.text1 {
    text-align: left;
    font: normal normal small 10px/1.4 Poppins;
    letter-spacing: 0.77px;
    color: #202B3B;
    opacity: 1;
}

.card {
    background-color: #ffffff;
    border: none;
}

.location-text {
    text-align: center;
    font: normal normal normal 14px/19px Poppins;
    letter-spacing: 0.77px;
    color: #202B3B;
    opacity: 1;
}

@media screen and (max-width: 768px) {
    .content-container {
        flex-direction: column;
    }

    .half-card {
        width: calc(100% - 40px);
    }
}</style>
  