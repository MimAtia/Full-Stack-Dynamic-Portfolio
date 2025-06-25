@extends('index')
@push('style')
<title>Welcome page</title>
@endpush
@section('main-content')

    <header>
        <div class="navbar">
            <div class="logo">Atia Sultana Mim</div>
            <nav>
                <a href="#home" class="active">Home</a>
                <a href="#personal">Personal</a>
                <a href="#education">Education</a>
                <a href="#skills">Skills</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="section-title">Atia Sultana Mim <div class="underline"></div></div>
        <h2>Student of Computer Science and Engineering</h2>
        <div class="about-container" style="margin-top:2.5rem;">
            <div class="about-img">
                <img src="{{ asset('assets\images\mim (2).png') }}" alt="Atia Sultana Mim" />
            </div>
            <div class="about-text">
                <h3>Hello there,</h3>
                <p><b>I am Atia Sultana Mim.</b></p>
                <p>Welcome to my website. Here you can get information about me. And thank you for visiting.</p>
                <p>I am currently a student at Daffodil International University.<br>
                I am studying B.Sc. in Computer Science and Engineering.</p>
                <a href="#personal">Read More</a>
            </div>
        </div>
    </section>

    <section id ="personal">
    <div class="section-title">Personal <div class="underline"></div></div>
        <div class="personal-container">
            <div class="personal-img">
                <img src="{{ asset('assets/images/mimpic2.jpg') }}" alt="Atia Sultana Mim" />
                </div>
            <div class="personal-details">
                <h3>I am Atia Sultana Mim</h3>
                <ul>
                    <li><b>Student of C.S.E</b></li>
                    <li>Date of Birth: 22 February, 2002</li>
                    <li>Place of Birth: Dhaka, Bangladesh</li>
                    <li>Nationality: Bangladeshi</li>
                    <li>Father's Name: Mohammad Ali</li>
                    <li>Mother's Name: Rehana Parvin</li>
                    <li>Sex: Female</li>
                    <li>Religion: Islam</li>
                    <li>Marital Status: Unmarried</li>
                    <li>Current Address: Mirpur-1, Dhaka</li>
                    <li>Permanent Address: Karatia, Tangail</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section id="education">
        <div class="section-title">Education<div class="underline"></div></div>
        <div class="edu-container">
            <div class="edu-card">
                <img src="{{ asset('assets/images/school.png') }}" alt="Atia Sultana Mim" />
                <h4> SSC </h4>
                <p>Abeda Khanam Girls' High School & College</p>
                <p>Dhaka Board (2017)</p>
                <p>GPA: 5.00</p>
            </div>
            <div class="edu-card">
                <img src="{{ asset('assets/images/clg.jpg') }}" alt="Atia Sultana Mim" />
                <h4> SSC </h4>
                <p>Kumudini Govt. College</p>
                <p>Dhaka Board (2020)</p>
                <p>GPA: 5.00</p>
            </div>

            <div class="edu-card">
                <img src="{{ asset('assets/images/uni.png') }}" alt="Atia Sultana Mim" />
                <h4> SSC </h4>
                <p>Daffodil International University</p>
                <p>Semester: 8th (Current)</p>
               
            </div>
            
        </div>
    </section>

    <section id="skills">
        <div class="section-title">Skills<div class="underline"></div></div>
        <div class="skills-container">
            <p>1.Advance in JAVA</p>
            <p>2.Advance in C</p>
            <p>3.Advance in HTML</p>
            <p>4.Advance in Microsoft Office</p>
            <p>5.Intermediate in CSS</p>

        </div>
    </section>  

    <section id="contact">
        <div class="section-title">Contact<div class="underline"></div></div>
        <div class="contact-container">
            <p>FB ID: Atia Sultana Mim</p>
            <p>Email: mim15-5375@diu.edu.bd</p>
            <p>Phone: 01319487402</p>
        </div>
    </section>  
    <section id="About me"
            

    <footer class="center-text">
        <p><b>Thank You for Visiting My Portfolio Site</b></p>
  
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html> 