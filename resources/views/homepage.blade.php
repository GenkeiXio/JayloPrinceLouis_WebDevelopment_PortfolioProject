<!-- resources/views/homepage.blade.php -->
@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 
        <section class="hero">
            <div class="home-bg-blur"></div>
            <div class="home-content">
                <h1>Welcome to My Portfolio Ma'am/Sir. {{ $username }}!</h1>
                <h2>Welcome to my portfolio, where every piece of work is crafted with care—just like a delicious treat from your favorite café. 
                    Each lab activity is a blend of learning and creativity, and just as every bite brings a little joy, each project showcases 
                    the skills I’ve developed. From setting up frameworks to building dynamic web functionalities, this portfolio is a collection 
                    of those little moments of achievement.
                </h2>

                <p>
                    <b>I invite you to explore and savor the work I’ve poured my heart into, one project at a time. Where every click is a little joy.</b>
                </p>
            </div>
        </section>

        <section class="home-heading">
            <div class="heading">My <span>Web Development Portfolio</span></div> 

            <div class="feature">
                <div class="feature-box">
                    <img src="{{ asset('css/Code.jpg') }}" alt="">
                    <h3>Introduction</h3>
                    <p>
                        This portfolio presents the documentation of four lab activities completed as part of the Web Development course. 
                        Each lab focused on different aspects of building web applications using the Laravel framework. 
                        From setting up the development environment to implementing key functionalities such as routing, views, login systems, 
                        and middleware, these activities have provided hands-on experience in applying Laravel's powerful features.

                        Through this portfolio, I aim to showcase the knowledge and skills gained throughout these exercises, highlighting the 
                        processes, outcomes, and reflections of each activity. These labs have significantly contributed to my understanding of 
                        web development and strengthened my ability to create functional and efficient web applications.

                        I would also like to express my deepest gratitude to my professor, John Paul Azore, for being the best professor in 
                        Web Development. His teaching methods have been invaluable, making the material accessible and clear. The way he guides 
                        our class has truly helped us understand his lectures thoroughly, and I am incredibly thankful for his support and 
                        dedication.
                    </p>
                </div>

            </div>
        </section>

        <section class="home-heading">

            <div class="feature">
                <div class="feature-box">
                    <img src="{{ asset('css/Ccode.jpg') }}" alt="">
                    <h3>Laboratory Activity 1</h3>
                    <p>
                        In Lab Activity 1, the primary focus was on setting up the Laravel framework, creating a new project, and 
                        configuring the environment to ensure everything was properly connected, including database integration. 
                        This activity was essential in establishing a solid starting point for future development.
                    </p>
                </div>
                <div class="feature">
                    <div class="feature-box">
                        <img src="{{ asset('css/Coding.jpg') }}" alt="">
                        <h3>Laboratory Activity 2</h3>
                        <p>
                            In Lab Activity 2 explored the creation of basic routes and views. This step allowed for the construction of 
                            undamental navigation between different pages of the web application, such as the homepage and 'About Us' page. 
                            By handling route parameters, I learned how to manage dynamic content and enhance the application's flexibility.
                            Lab2 is placed in Lab1's Releases.
                        </p>
                    </div>
    
                </div>
            </div>
        </section>

        <section class="home-heading">

            <div class="feature">
                <div class="feature-box">
                    <img src="{{ asset('css/Coding.jpg') }}" alt="">
                    <h3>Laboratory Activity 3</h3>
                    <p>
                        In Lab Activity 3 focused on building a user-friendly login system in Laravel, where both user input and guest access 
                        were implemented. This activity was crucial in understanding the mechanics of user authentication and session handling 
                        within a web application. By creating forms, controllers, and setting up redirection logic, the project offered an 
                        interactive experience for users, ensuring a personalized welcome message based on login details or guest access.
                    </p>
                </div>
                <div class="feature-box">
                    <img src="{{ asset('css/Ccode.jpg') }}" alt="">
                    <h3>Laboratory Activity 4</h3>
                    <p>
                        In Lab Activity 4, the emphasis shifted to creating and registering middleware in Laravel. This activity involved implementing 
                        custom middleware to enforce age verification and log HTTP requests. By registering middleware both globally and route-specific, 
                        I explored how to enhance application security and improve request handling. This lab deepened my understanding of middleware 
                        logic and how it can be used to control access and monitor user activity within an application.
                    </p>
                </div>

            </div>
        </section>

@endsection
