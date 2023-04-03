@include('partials.header')

    @include('partials.welcome-navbar')
    
    <div class="hero">
        <div class="overlay">
            <div class="hero-text text-white text-center">
                <h1 class="display-2">The Future of Medical Care</h1>
                <p class="lead">We believe in providing you with the best medical care</p>
                <a href="" class="btn btn-success btn-lg">Book a Doctor</a>
                <a href="{{route('apply-doctor')}}" class="btn btn-success btn-lg px-5 ms-4">Join Us</a>
            </div>
        </div>
    </div>



    <section class="services">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 service p-4">
                    <i class="fas fa-tag text-success"></i>
                    <h3 class="text-success">Medical Pricing</h3>
                    <p class="lead-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-shield-halved text-success"></i>
                    <h3 class="text-success">Quality & Safety</h3>
                    <p class="lead-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-suitcase-medical text-success"></i>
                    <h3 class="text-success">Immediate Service</h3>
                    <p class="lead-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 service p-4">
                    <i class="fas fa-flask-vial text-success"></i>
                    <h3 class="text-success">Cutting-Edge Equipment</h3>
                    <p class="lead-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-shield-heart text-success"></i>
                    <h3 class="text-success">Personalized Treatment</h3>
                    <p class="lead-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
                <div class="col-md-4 service p-4">
                    <i class="fas fa-user-doctor text-success"></i>
                    <h3 class="text-success">Experience Physicians</h3>
                    <p class="lead-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi et, accusamus explicabo doloremque quisquam delectus repellat beatae ullam commodi ratione.
                    </p>
                </div>
            </div>
        </div>
    </section>
<section class="aboutUs bg-success text-white px-5">

<div class="px-5">
    <div class="mb-4 py-3 text-xl text-center uppercase lg:mb-12 lg:text-3xl">
        <span class="fs-3 "><b>WELCOME TO</b></span>
        <h1 class="text-3xl lg:text-5xl"><b>eMED HOSPITAL AND MEDICAL CENTER</b></h1>

    </div>
    <p class="mb-5 fs-3 text-lg leading-relaxed text-justify lg:mb-24">
        eMED Hospital and Medical Center is one of the best hospitals in Manila that provides international-grade medical 
        services but with a Filipino heart. A multi-awarded private hospital, AHMC is the first healthcare facility in the country 
        with a hotel-like ambiance, promoting healing, comfort, and care for patients and even their families.</p>
    <h3 class="pb-3"><b>WHY CHOOSE US</b></h3>
    <p class="mb-0 pb-5 fs-3 text-lg leading-relaxed text-justify lg:mb-24">
        eMED Hospital and Medical Center is among the biggest hospitals in the Philippines. It is a world-class healthcare institution 
        equipped with cutting-edge technology to provide compassionate care tailored to each patient's needs. Our team of the best doctors 
        and surgeons is dedicated to delivering positive clinical outcomes, patient safety, and efficient disease management approaches.</p>
</div>
</section>
<section class="text-success py-5 px-5">
    <div>
        <div class="text-center pb-5">
            <h2 >Company Profile</h2>
            <img src="{{ asset('images/companyprofile.jpg') }}" alt="Free Template by uicookies.com" class="img-fluid">
        </div>
        <div class="px-5">
            <p>Asian Hospital and Medical Center (AHMC) was founded on a vision to provide the Filipino people top notch medical
                service that is at par with international standards. This idea was translated into reality through the passion and 
                dedication of its people who are burning with fervor to give more of themselves and stay true to its commitment of 
                providing “Innovations in Healthcare for an Unforgettable Healing Experience”.</p>
   
           <p>
            Established on May 11, 2002, AHMC is a premiere tertiary hospital accredited by the Joint Commission International (JCI) 
            as one of the most advanced healthcare institutions in the Philippines dedicated to providing value healthcare for patients 
            and their families. It is a member of the Metro Pacific Hospital Group, the largest Philippine-based private hospital group 
            managed by the Metro Pacific Investments Corporation (MPIC), the local unit of the First Pacific Group headed by Mr. Manuel V. Pangilinan.
           </p>
       
           <p>
            The first hospital in the Philippines designed with a hotel-like ambiance, AHMC believes in creating an environment which ultimately promotes 
            healing, comfort, and care for the patient and their family. AHMC boasts a 296-bed capacity on a 17,250-square meter, carefully planned and 
            specially designed to provide a sanctuary that ensures the safety of every patient, guest, and staff. With over 1,000 doctors trained in various
             specialties at the world’s top institutions, more than 400 highly skilled nurses, and 1,000 employees and staff, AHMC continuously provides high 
             quality patient care.
           </p>
           <p>
            As one of the country’s most advanced healthcare institutions, AHMC is guided by the values of fairness, integrity, teamwork, excellence, 
            and respect that have served as the hospital’s foundation since its establishment.
           </p>
           <p>With a vision to become the Center of Global Expertise in caring for the unique needs of all patients and communities and a mission to deliver 
            accessible world-class compassionate and integrative healthcare services to every individual. It efforts to innovate, its dedication to its beloved 
            patients being the hospital’s drive to embark on deliberate actions that will lead to the best clinical outcomes, quality patient safety, and efficient 
            disease management approaches.
           </p>
        </div>
        <div class="text-center px-5">
            <strong class="fs-2">GLOBAL EXPERTISE. FILIPINO HEART. </strong>
            <p>
                Whether you’re looking for a consultation, a surgery,or a family check-up, we invite you to experience our brand of “Tatak Asian” care.
            </p>
            <strong class="fs-2">BY THE NUMBERS</strong>
            <p class="px-5">
                The Hospital was designed with hotel-like ambience to promote healing and provide comfort.
Although mainly for patients, it was also designed with visiting families and friends in mind.
Here are more interesting facts.
            </p>
        </div>

    </div>

</section>
  
<section class="probootstrap-section py-5" style="background-color:#c4cacc">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="h1">Our Doctors</h2>
                    <p class="lead text-secondary">Far far away, behind the word mountains, far from the countries Vokalia.</p>
            <div class="row justify-content-center mb-5">
                <div class="col-md-3">
                    <a href="#" class="btn btn-secondary btn-success">Join Us</a>
                </div>
            </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="doctors col-lg-3 col-md-3 col-sm-6 col-6 px-0 prbootstrap-team">
                <img  src="{{ asset('images/doctor1.jpg') }}" alt="Free Template by uicookies.com" class="img-fluid">
                    <div class="probootstrap-person-text text-center bg-success text-white">
                        <span class="title">Medical Doctor</span><br>
                        <span class="name">Dr. Abbey Smith</span>
                    </div>
            </div>
            <div class="doctors col-lg-3 col-md-3 col-sm-6 col-6 px-0 prbootstrap-team">
                <img src="{{ asset('images/doctor2.jpg') }}" alt="Free Template by uicookies.com" class="img-fluid">
                    <div class="probootstrap-person-text text-center bg-success text-white">
                        <span class="title">Medical Doctor</span><br>
                        <span class="name">Dr. Ben Carpio</span>
                    </div>
            </div>
            <div class="doctors col-lg-3 col-md-3 col-sm-6 col-6 px-0 prbootstrap-team">
                <img src="{{ asset('images/doctor3.jpg') }}" alt="Free Template by uicookies.com" class="img-fluid">
                    <div class="probootstrap-person-text text-center bg-success text-white">
                        <span class="title">Medical Doctor</span><br>
                        <span class="name">Dr. Louisa Westwood</span>
                    </div>
            </div>
            <div class="doctors col-lg-3 col-md-3 col-sm-6 col-6 px-0 prbootstrap-team">
                <img src="{{ asset('images/doctor4.jpg') }}" alt="Free Template by uicookies.com" class="img-fluid">
                <div class="info probootstrap-person-text text-center bg-success text-white">
                    <span class="title">Cardiac Surgeon</span><br>
                    <span class="name">Dr. Mark Sebastian</span>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="contactUs text-center py-5">
        <div>
            <h1>eMED CONTACT DETAILS</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.237453811999!2d121.04134481525882!3d14.413470685498195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d0486748c53f%3A0x970be8155b376d4a!2sAsian%20Hospital%20and%20Medical%20Center!5e0!3m2!1sen!2sph!4v1680541581540!5m2!1sen!2sph" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>2205 Civic Dr, Alabang, Muntinlupa, 1780 Metro Manila</p>
            <div class="text-success fs-3">TRUNK LINE</div>
            <p>+(632) 8-771-9000</p>
            <div class="text-success fs-3">EMERGENCY</div>
            <p>+(632) 8-876-5755</p>
            <div class="text-success fs-3">E-MAIL ADDRESS</div>
            <p>For your comments and suggestions, e-mail us at feedback@asianhospital.com

               <br> For your inquiries, e-mail us at info@asianhospital.com</p>
    </div>
    </section>
@include('partials.footer')