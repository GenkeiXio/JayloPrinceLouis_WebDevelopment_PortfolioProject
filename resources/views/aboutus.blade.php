<!-- resources/views/aboutus.blade.php -->
@extends('Components.Layout')

@section('title', 'About Us')

@section('content')
    <main class="about-main">
        <section class="intro-section">
            <h1>About Me</h1>
        </section>

        <section class="about-section">
            <div class="about-content">
                <div class="text-container">
                    <h2>Introduction</h2>
                    <p>
                        Hi Ma'am/Sir. <b>{{ $username }}</b>, My name is Prince Louis Jaylo, 20 years old, and I live in Guinobatan, Albay. 
                        I am currently a 3rd Year BSIT student with a passion for technology, always thinking of innovative solutions. 
                        One example is the ADR (Automated Disinfecting Robot), which I hope to create one day to assist establishments like 
                        hospitals, schools, companies, and more.

                        I also love to draw and often use my talent in designing the technology and innovations I envision. Originally, 
                        I was aiming for a degree in Architecture, but I ended up pursuing my second choice, BSIT, which has turned out to be a 
                        great fit. I’ve learned a lot in this course, despite the challenges this semester. Although the subjects have been tough
                        lately, I’m still managing and pushing through.
                    </p>
                </div>
            </div>

            <div class="about-content">
                <div class="text-container">
                    <h2>Hobbies</h2>
                    <p>
                        My hobbies include playing video games such as League of Legends, where my idol team is T1, as well as Wild Rift,
                         Valorant, and open-world games. I also enjoy reading books, watching movies and anime, going to the gym and working out,
                        and practicing the sport Taekwondo.
                    </p>
                </div> 
            </div> 

        </section>
    </main>
@endsection