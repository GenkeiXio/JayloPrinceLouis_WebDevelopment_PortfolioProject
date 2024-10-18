<!-- resources/views/menu.blade.php -->
@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')
 
@section('content')
    <main class="content-main">
        <section class="menu">
            <div class="menu-box"> 
                <div class="bfast">Breakfast</div>
                    <div class="menu-a"> 

                        <div class="a-box"> 
                            <img src="{{ asset('css/Web.jpg') }}" alt="">
                            <h3>Lab Activity 1</h3>
                            <div class="Content"></div>
                            <div class="stars">
                                <p>
                                    
                                </p>
                            </div>
                            <a href="https://github.com/GenkeiXio/Jaylo_PrinceLouis_Lab1.git" class="check-btn">GitHub</a>
                        </div>

                        <div class="a-box"> 
                            <img src="{{ asset('css/Web.jpg') }}" alt="">
                            <h3>Lab Activity 2</h3>
                            <div class="Content"></div>
                            <div class="stars">
                                <p>
                                    
                                </p>
                            </div>
                            <a href="https://github.com/GenkeiXio/Jaylo_PrinceLouis_Lab1/compare/GroupNo.8Lab2...main" class="check-btn">GitHub</a>
                        </div>

                        <div class="a-box"> 
                            <img src="{{ asset('css/Web.jpg') }}" alt="">
                            <h3>Lab Activity 3</h3>
                            <div class="Content"></div>
                            <div class="stars">
                                <p>
                                    
                                </p>
                            </div>
                            <a href="https://github.com/GenkeiXio/GroupNo.8Lab-3.git" class="check-btn">GitHub</a>
                        </div>

                        <div class="a-box"> 
                            <img src="{{ asset('css/Web.jpg') }}" alt="">
                            <h3>Lab Activity 4</h3>
                            <div class="Content"></div>
                            <div class="stars">
                                <p>
                                    
                                </p>
                            </div>
                            <a href="https://github.com/GenkeiXio/GroupNo.8Lab4.git" class="check-btn">GitHub</a>
                        </div>  

                        
                </div>
            </div>
        </section>
    </main>
@endsection