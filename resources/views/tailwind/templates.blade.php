@extends('layouts.app')

@section('content')

    <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                    Docs
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                    Examples
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                    Blog
                </a>
            </div>
            <div>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Download</a>
            </div>
        </div>
    </nav>




    <section class="bg-blue-lightest h-full py-8">
        <div class="w-5/6 max-w-lg ml-auto mr-auto h-full">
            <div class="flex items-center justify-center text-center h-full">
                <div>
                    <h1 class="text-4xl sm:text-5xl font-semibold leading-none tracking-tight mb-4">This is an insanely big ass heading</h1>
                    <h2 class="text-2xl sm:text-3xl text-blue-darker opacity-75 font-normal leading-tight mb-8">This is a little ass heading to provide additional support.</h2>
                    <div class="flex flex-col sm:flex-row items-center justify-center sm:pt-3 mb-3 sm:mb-6">
                        <a class="flex items-center text-xl leading-none text-blue hover:text-blue-dark no-underline mb-2 sm:mb-0 sm:mr-4" href="#">
                            <div class="mr-3">
                                <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>
                            </div>
                            <span>
                            Link to something
                        </span>
                        </a>
                        <a class="flex items-center text-xl leading-none text-blue hover:text-blue-dark no-underline mt-2 sm:mt-0 sm:ml-4" href="#">
                            <div class="mr-3">
                                <svg class="align-middle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="8 12 12 16 16 12"/><line x1="12" y1="8" x2="12" y2="16"/></svg>
                            </div>
                            <span>
                            Link to something
                        </span>
                        </a>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-center pt-8">
                        <button class="bg-blue hover:bg-blue-dark text-2xl leading-none text-white font-semibold h-12 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">
                            Get started
                        </button>
                        <button class="bg-transparent text-2xl leading-none text-blue font-semibold hover:text-blue-dark h-12 px-8 border border-blue-lighter hover:border-blue-light rounded-full whitespace-no-wrap mt-2 sm:mt-0 sm:ml-2">
                            Learn more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-8">
        <div class="w-5/6 max-w-lg ml-auto mr-auto mt-8 mb-8">
            <div class="flex flex-wrap -mx-6 -my-6">
                <div class="w-full sm:w-1/2 px-6 py-6">
                    <div class="mb-8">
                        <svg class="align-middle text-red" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                    <p class="text-lg sm:text-xl leading-normal text-grey-darker mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely.</p>
                    <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                </div>
                <div class="w-full sm:w-1/2 px-6 py-6">
                    <div class="mb-8">
                        <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                    <p class="text-lg sm:text-xl leading-normal text-grey-darker mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely.</p>
                    <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-grey-lightest py-8">
        <div class="w-5/6 max-w-2xl ml-auto mr-auto mt-8 mb-8">
            <div class="flex flex-wrap -mx-6 -my-6">
                <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                    <div class="mb-8">
                        <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                    </div>
                    <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                    <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                    <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                    <div class="mb-8">
                        <svg class="align-middle text-pink" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                    </div>
                    <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                    <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                    <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                    <div class="mb-8">
                        <svg class="align-middle text-purple" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                    </div>
                    <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                    <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                    <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/4 px-6 py-6">
                    <div class="mb-8">
                        <svg class="align-middle text-orange" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                    </div>
                    <h3 class="text-3xl font-semibold tracking-tight leading-none mb-3">This is a small heading</h3>
                    <p class="text-lg leading-normal text-grey-dark mb-8">If you don't plan to use the shadow utilities in your project, you can disable them entirely by setting the option.</p>
                    <a class="text-lg leading-normal text-blue hover:text-blue-dark no-underline" href="#">Link to something</a>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-8">
        <div class="w-5/6 max-w-lg ml-auto mr-auto mt-8 mb-8">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <p class="text-xl leading-normal mr-6 mb-8 md:mb-0 text-center md:text-left">This could be a call to action.</p>
                <button class="bg-blue hover:bg-blue-dark text-xl leading-none text-white font-semibold h-10 px-6 rounded-full whitespace-no-wrap">
                    Get started
                </button>
            </div>
        </div>
    </section>



    <section class="bg-white py-8">
        <div class="w-5/6 max-w-lg ml-auto mr-auto mt-8 mb-8">
            <div class="flex flex-col justify-center text-center pb-8">
                <h2 class="text-5xl font-semibold leading-none tracking-tight mb-4">Flexible pricing for your inflexible needs</h2>
                <h3 class="text-3xl text-blue-darker opacity-75 font-normal leading-none mb-8">14-day free trial. No credit card required.</h3>
            </div>

            <div class="bg-white rounded shadow-lg overflow-hidden">
                <div class="flex flex-col-reverse md:flex-row">
                    <div class="flex-1">
                        <div class="bg-grey-lightest p-8">
                            <h5 class="text-xl font-semibold mb-8">What you get when you sign up:</h5>
                            <ul class="list-reset">
                                <li class="mb-4">
                                    <div class="flex items-center">
                                        <div class="mr-4">
                                            <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                        </div>
                                        <p class="text-lg leading-normal">Unlimited everything</p>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="flex items-center">
                                        <div class="mr-4">
                                            <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                        </div>
                                        <p class="text-lg leading-normal">Unlimited limitlessness</p>
                                    </div>
                                </li>
                                <li class="mb-4">
                                    <div class="flex items-center">
                                        <div class="mr-4">
                                            <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                        </div>
                                        <p class="text-lg leading-normal">Single sign-on</p>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="flex items-center">
                                        <div class="mr-4">
                                            <svg class="align-middle text-teal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                        </div>
                                        <p class="text-lg leading-normal">Code export HAHAHA</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-col items-center p-8 h-full">
                            <div class="flex flex-1 mb-8">
                                <div class="flex self-start items-center">
                                    <span class="text-3xl text-grey-dark leading-none mr-2">$</span>
                                    <span class="text-5xl font-semibold tracking-tight leading-none text-teal mr-3" style="font-size: 5.6rem;">499</span>
                                    <span class="text-xl text-grey-dark leading-none">/ month</span>
                                </div>
                            </div>
                            <button class="bg-teal hover:bg-teal-dark text-xl leading-none text-white font-semibold h-10 px-6 rounded-full whitespace-no-wrap w-full">
                                Take my money
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-5/6 max-w-md ml-auto mr-auto pt-8 mt-8 mb-8">
            <div class="flex flex-wrap -mx-6 -my-6">
                <div class="w-full sm:w-1/2 px-6 py-6">
                    <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                    <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                </div>
                <div class="w-full sm:w-1/2 px-6 py-6">
                    <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                    <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                </div>
                <div class="w-full sm:w-1/2 px-6 py-6">
                    <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                    <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                </div>
                <div class="w-full sm:w-1/2 px-6 py-6">
                    <h3 class="text-xl font-semibold leading-tight mb-3">Can I use these templates for free?</h3>
                    <p class="text-lg leading-normal text-grey-darker mb-8">Yes! These templates are open-source so you can copy, paste and edit them any way you see fit.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="font-sans antialiased w-full bg-green py-8">
        <div class="container mx-auto">
            <div class="py-8 w-full mx-auto">
                <h1 class="text-indigo-darkest text-4xl text-center font-normal">Simple, transparent pricing.</h1>
                <h2 class="text-white text-4xl text-center font-normal">Always know what you'll pay</h2>
                <div class="my-16 flex flex-wrap md:items-center w-full">
                    <div class="bg-white shadow rounded w-full md:w-1/2 z-10">
                        <div class="py-8 text-center text-green font-semibold uppercase">Pay as you go</div>
                        <hr class="py-0 my-0 border border-grey-lighter">
                        <div class="py-8">
                            <div class="flex items-top">
                                <div class="w-1/2 flex justify-center items-center"><span class="text-3xl font-semibold text-indigo-darker">1.4%</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-grey mx-2 h-6 w-6">
                                        <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z" class="heroicon-ui"></path>
                                    </svg> <span class="text-xl font-semibold text-indigo-darker">€0.25</span>
                                </div>
                                <div class="w-1/2 flex justify-center items-center"><span class="text-3xl font-semibold text-indigo-darker">2.9%</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-grey mx-2 h-6 w-6">
                                        <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z" class="heroicon-ui"></path>
                                    </svg> <span class="text-xl font-semibold text-indigo-darker">€0.25</span>
                                </div>
                            </div>
                            <div class="flex items-top mt-4">
                                <div class="w-1/2 text-center text-xs text-grey-dark">for European cards.</div>
                                <div class="w-1/2 text-center text-xs text-grey-dark">for non-European cards.</div>
                            </div>
                            <div class="mt-16 mx-auto w-2/3">
                                <div class="flex items-center mb-4"><span class="inline-flex bg-green-lighter rounded-full mr-4 p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-green h-4 w-4"><path d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z" class="heroicon-ui"></path></svg></span>  <span class="text-grey-darker">No setup, monthly, or hidden fees</span>
                                </div>
                                <div class="flex items-center mb-4"><span class="inline-flex bg-green-lighter rounded-full mr-4 p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-green h-4 w-4"><path d="M11 18.59V3a1 1 0 0 1 2 0v15.59l5.3-5.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 1.4-1.42l5.3 5.3z" class="heroicon-ui"></path></svg></span>  <span class="text-grey-darker">Pay only for what you use</span>
                                </div>
                                <div class="flex items-center mb-4"><span class="inline-flex bg-green-lighter rounded-full mr-4 p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-green h-4 w-4"><path d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z" class="heroicon-ui"></path></svg></span>  <span class="text-grey-darker">Real-time fee reporting</span>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Create account</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
                                    <path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="bg-indigo-darker rounded shadow w-5/6 md:w-1/2 z-0 mx-auto -mt-1 md:-mt-0 md:-ml-1">
                        <div class="py-8 text-center text-indigo-lightest font-semibold uppercase">Enterprise</div>
                        <hr class="mb-8 my-0 border border-indigo-dark opacity-25">
                        <div class="w-2/3 mx-auto">
                            <p class="text-center text-sm text-indigo-lightest opacity-75 leading-normal">Stripe offers everything needed to run an online business at scale. Get in touch for details.</p>
                        </div>
                        <div class="py-8">
                            <table class="w-3/4 mx-auto text-indigo-lightest text-center" style="border-collapse: collapse;">
                                <tbody>
                                <tr>
                                    <td class="px-2 py-4 border border-indigo-dark">Account management</td>
                                    <td class="px-2 py-4 border border-indigo-dark">Volume discounts</td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-4 border border-indigo-dark">Migration assistance</td>
                                    <td class="px-2 py-4 border border-indigo-dark">Dedicated support</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#">
                            <div class="py-8 opacity-50 bg-indigo-darkest hover:bg-indigo-dark text-indigo-lighter rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Contact sales</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
                                    <path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container bg-grey-lightest mx-auto shadow rounded pb-4 bg-cover" style="color:#606F7B;background-color: rgb(165, 182, 198); background-image:url('https://68.media.tumblr.com/f6a4004f3092b0d664daeabb95d5d195/tumblr_oduyciOJNb1uhjffgo1_500.gif');">
        <div class="mt-2 p-4 border-b border-grey-light  text-center">
            <span class="text-4xl font-thin">Mountain View, US</span>
            <span class="hidden sm:inline-block align-bottom text-xs">( 94041 )</span>
        </div>
        <div class="text-center text-xl text-grey-light p-4">
            <span>Fog</span>
            <span>, fog</span>
        </div>
        <div class="flex justify-center">
            <div class="text-center p-2">
                <div class="text-lg text-grey-light">
                    <span class="text-right">45˚F</span>
                    <span class="text-center text-5xl text-white mx-6  font-thin">49˚F</span>
                    <span class="text-left">58˚F</span>
                </div>
                <div class="text-grey-light tracking-wide">
                    Saturday | 30 Dec | 10:30pm
                </div>
            </div>
        </div>
    </div>



    <section class="mt-8 container mx-auto flex items-center justify-around">
        <div>
            <div class="flex rounded border-b-2 border-grey-dark overflow-hidden">
                <button class="block text-white text-sm shadow-border bg-blue hover:bg-blue-dark text-sm py-3 px-4 font-sans tracking-wide uppercase font-bold">
                    contact us
                </button>
                <div class="bg-blue-light shadow-border p-3">
                    <div class="w-4 h-4">
                        <svg class="fill-current text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="flex rounded border-b-2 border-grey-dark overflow-hidden">
                <button class="block text-white text-sm shadow-border bg-green hover:bg-green-dark text-sm py-3 px-4 font-sans tracking-wide uppercase font-bold">
                    schedule a demo
                </button>
                <div class="bg-green-light shadow-border p-3">
                    <div class="w-4 h-4">
                        <svg class="fill-current text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1024 544v448q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h224v-352q0-14 9-23t23-9h64q14 0 23 9t9 23zm416 352q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-grey-lightest py-8">
        <div class="w-5/6 max-w-2xl ml-auto mr-auto mt-8">
            <div class="flex flex-wrap -mx-6 -my-6">
                <div class="w-full lg:w-1/3 px-6 py-6">
                    <a class="no-underline" href="#">
                        <div class="bg-pink-dark rounded shadow-lg overflow-hidden p-8">
                            <h5 class="text-2xl text-white mb-4">Small heading</h5>
                            <p class="text-lg text-white leading-tight">This card links to a deeper screen with more info on some topic.</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 px-6 py-6">
                    <a class="no-underline" href="#">
                        <div class="bg-red-light rounded shadow-lg overflow-hidden p-8">
                            <h5 class="text-2xl text-white mb-4">Small heading</h5>
                            <p class="text-lg text-white leading-tight">This card links to a deeper screen with more info on some topic.</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 px-6 py-6">
                    <a class="no-underline" href="#">
                        <div class="bg-purple-light rounded shadow-lg overflow-hidden p-8">
                            <h5 class="text-2xl text-white mb-4">Small heading</h5>
                            <p class="text-lg text-white leading-tight">This card links to a deeper screen with more info on some topic.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-grey-lightest py-8">
        <div class="w-5/6 max-w-xl ml-auto mr-auto my-8">
            <div class="flex md:items-center flex-col md:flex-row md:justify-between">
                <div class="mb-8 md:mb-0 md:pr-4">
                    <h3 class="text-4xl font-normal tracking-tight leading-none mb-3">This is a medium heading</h3>
                    <h4 class="text-3xl text-grey-dark font-normal leading-tight">This might be used for a call to action.</h4>
                </div>
                <div class="md:pl-4">
                    <div class="flex items-center">
                        <button class="bg-blue hover:bg-blue-dark text-xl leading-none text-white font-semibold h-10 px-6 rounded-full whitespace-no-wrap mr-2">
                            Get started
                        </button>
                        <button class="bg-transparent text-xl leading-none text-blue font-semibold hover:text-blue-dark h-10 px-6 border border-blue-lighter hover:border-blue-light rounded-full whitespace-no-wrap ml-2">
                            Learn more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="w-full bg-blue pt-8">
        <div class="flex flex-col sm:flex-row justify-center mb-6 sm:mb-0">
            <div class="sm:flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg rounded-tr-none bg-white mt-4 flex flex-col">
                <div class="p-8 text-3xl font-bold text-center">Free</div>
                <div class="border-0 border-grey-light border-t border-solid text-sm">
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        1 Ice Cream
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Unlimited toppings
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Analytics
                    </div>
                </div>
                <div class="text-center mt-8 mb-8 mt-auto">
                    <a href="#" class="inline-block bg-green text-white px-6 py-4 rounded hover:bg-green-darker hover:text-white hover:no-underline">Sign Up</a>
                </div>
            </div>
            <div class="flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg bg-white mt-4 sm:-mt-4 shadow-lg z-30 flex flex-col">
                <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                <div class="w-full border-0 border-grey-light border-t border-solid text-sm">
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        2 Ice Creams
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        25 Cones
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Unlimited toppings
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Analytics
                    </div>
                </div>
                <div class="w-full text-center px-8 pt-8 text-xl mt-auto">
                    $2.99
                    <span class="text-grey-light italic line-through">
          $4.99
        </span>
                </div>
                <div class="w-full text-center mb-8 mt-auto">
                    <a href="#" class="inline-block bg-green text-white px-6 py-4 rounded hover:bg-green-darker hover:text-white hover:no-underline">Sign Up</a>
                </div>
            </div>
            <div class="flex-1 lg:flex-initial lg:w-1/4 rounded-t-lg rounded-tl-none bg-white mt-4 flex flex-col">
                <div class="p-8 text-3xl font-bold text-center">Pro</div>
                <div class="border-0 border-grey-light border-t border-solid text-sm">
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Unlimited Ice Creams
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Unlimited Cones
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Unlimited toppings
                    </div>
                    <div class="text-center border-0 border-grey-light border-b border-solid py-4">
                        Analytics
                    </div>
                </div>
                <div class="text-center px-8 pt-8 text-xl mt-auto">
                    $5.99
                    <span class="text-grey-light italic line-through">
          $9.99
        </span>
                </div>
                <div class="text-center pt-8 mb-8 mt-auto">
                    <a href="#" class="inline-block bg-green text-white px-6 py-4 rounded hover:bg-green-darker hover:text-white hover:no-underline">Sign Up</a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane">
                <p class="text-red text-xs italic">Please fill out this field.</p>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe">
            </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                    Password
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-password" type="password" placeholder="******************">
                <p class="text-grey-dark text-xs italic">Make it as long and as crazy as you'd like</p>
            </div>
        </div>
        <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                    City
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="text" placeholder="Albuquerque">
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                    State
                </label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                        <option>New Mexico</option>
                        <option>Missouri</option>
                        <option>Texas</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                    Zip
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-zip" type="text" placeholder="90210">
            </div>
        </div>
    </div>





    <div class="flex flex-col">
        <div class="flex bg-yellow-lighter max-w-sm mb-4">
            <div class="w-16 bg-yellow">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M503.191 381.957c-.055-.096-.111-.19-.168-.286L312.267 63.218l-.059-.098c-9.104-15.01-23.51-25.577-40.561-29.752-17.053-4.178-34.709-1.461-49.72 7.644a66 66 0 0 0-22.108 22.109l-.058.097L9.004 381.669c-.057.096-.113.191-.168.287-8.779 15.203-11.112 32.915-6.569 49.872 4.543 16.958 15.416 31.131 30.62 39.91a65.88 65.88 0 0 0 32.143 8.804l.228.001h381.513l.227.001c36.237-.399 65.395-30.205 64.997-66.444a65.86 65.86 0 0 0-8.804-32.143zm-56.552 57.224H65.389a24.397 24.397 0 0 1-11.82-3.263c-5.635-3.253-9.665-8.507-11.349-14.792a24.196 24.196 0 0 1 2.365-18.364L235.211 84.53a24.453 24.453 0 0 1 8.169-8.154c5.564-3.374 12.11-4.381 18.429-2.833 6.305 1.544 11.633 5.444 15.009 10.986L467.44 402.76a24.402 24.402 0 0 1 3.194 11.793c.149 13.401-10.608 24.428-23.995 24.628z"/><path d="M256.013 168.924c-11.422 0-20.681 9.26-20.681 20.681v90.085c0 11.423 9.26 20.681 20.681 20.681 11.423 0 20.681-9.259 20.681-20.681v-90.085c.001-11.421-9.258-20.681-20.681-20.681zM270.635 355.151c-3.843-3.851-9.173-6.057-14.624-6.057a20.831 20.831 0 0 0-14.624 6.057c-3.842 3.851-6.057 9.182-6.057 14.624 0 5.452 2.215 10.774 6.057 14.624a20.822 20.822 0 0 0 14.624 6.057c5.45 0 10.772-2.206 14.624-6.057a20.806 20.806 0 0 0 6.057-14.624 20.83 20.83 0 0 0-6.057-14.624z"/></svg>
                </div>
            </div>
            <div class="w-auto text-grey-darker items-center p-4">
          <span class="text-lg font-bold pb-4">
              Heads Up!
          </span>
                <p class="leading-tight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>

        <div class="flex bg-green-lighter max-w-sm mb-4">
            <div class="w-16 bg-green">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M468.907 214.604c-11.423 0-20.682 9.26-20.682 20.682v20.831c-.031 54.338-21.221 105.412-59.666 143.812-38.417 38.372-89.467 59.5-143.761 59.5h-.12C132.506 459.365 41.3 368.056 41.364 255.883c.031-54.337 21.221-105.411 59.667-143.813 38.417-38.372 89.468-59.5 143.761-59.5h.12c28.672.016 56.49 5.942 82.68 17.611 10.436 4.65 22.659-.041 27.309-10.474 4.648-10.433-.04-22.659-10.474-27.309-31.516-14.043-64.989-21.173-99.492-21.192h-.144c-65.329 0-126.767 25.428-172.993 71.6C25.536 129.014.038 190.473 0 255.861c-.037 65.386 25.389 126.874 71.599 173.136 46.21 46.262 107.668 71.76 173.055 71.798h.144c65.329 0 126.767-25.427 172.993-71.6 46.262-46.209 71.76-107.668 71.798-173.066v-20.842c0-11.423-9.259-20.683-20.682-20.683z"/><path d="M505.942 39.803c-8.077-8.076-21.172-8.076-29.249 0L244.794 271.701l-52.609-52.609c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.077-8.077 21.172 0 29.249l67.234 67.234a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058L505.942 69.052c8.077-8.077 8.077-21.172 0-29.249z"/></svg>
                </div>
            </div>
            <div class="w-auto text-grey-darker items-center p-4">
          <span class="text-lg font-bold pb-4">
              Heads Up!
          </span>
                <p class="leading-tight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab beatae consequuntur dolore doloribus eius fugit, porro quidem repellat temporibus unde?
                </p>
            </div>
        </div>

        <div class="flex bg-teal-lighter max-w-sm mb-4">
            <div class="w-16 bg-teal">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M437.019 74.981C388.667 26.629 324.38 0 256 0S123.333 26.63 74.981 74.981 0 187.62 0 256s26.629 132.667 74.981 181.019C123.332 485.371 187.62 512 256 512s132.667-26.629 181.019-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.668-74.981-181.019zM256 470.636C137.65 470.636 41.364 374.35 41.364 256S137.65 41.364 256 41.364 470.636 137.65 470.636 256 374.35 470.636 256 470.636z"/><path d="M256 235.318c-11.422 0-20.682 9.26-20.682 20.682v94.127c0 11.423 9.26 20.682 20.682 20.682 11.423 0 20.682-9.259 20.682-20.682V256c0-11.422-9.259-20.682-20.682-20.682zM270.625 147.248A20.826 20.826 0 0 0 256 141.19a20.826 20.826 0 0 0-14.625 6.058 20.824 20.824 0 0 0-6.058 14.625 20.826 20.826 0 0 0 6.058 14.625A20.83 20.83 0 0 0 256 182.556a20.826 20.826 0 0 0 14.625-6.058 20.826 20.826 0 0 0 6.058-14.625 20.839 20.839 0 0 0-6.058-14.625z"/></svg>
                </div>
            </div>
            <div class="w-auto text-grey-darker items-center p-4">
          <span class="text-lg font-bold pb-4">
              Heads Up!
          </span>
                <p class="leading-tight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, labore, voluptatem. Deserunt illum laborum maxime?
                </p>
            </div>
        </div>

        <div class="flex bg-red-lighter max-w-sm mb-4">
            <div class="w-16 bg-red">
                <div class="p-4">
                    <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M437.019 74.981C388.667 26.629 324.38 0 256 0S123.333 26.63 74.981 74.981 0 187.62 0 256s26.629 132.667 74.981 181.019C123.332 485.371 187.62 512 256 512s132.667-26.629 181.019-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.668-74.981-181.019zM256 470.636C137.65 470.636 41.364 374.35 41.364 256S137.65 41.364 256 41.364 470.636 137.65 470.636 256 374.35 470.636 256 470.636z" fill="#FFF"/><path d="M341.22 170.781c-8.077-8.077-21.172-8.077-29.249 0L170.78 311.971c-8.077 8.077-8.077 21.172 0 29.249 4.038 4.039 9.332 6.058 14.625 6.058s10.587-2.019 14.625-6.058l141.19-141.191c8.076-8.076 8.076-21.171 0-29.248z" fill="#FFF"/><path d="M341.22 311.971l-141.191-141.19c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.076-8.077 21.171 0 29.248l141.19 141.191a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058c8.075-8.077 8.075-21.172-.001-29.249z" fill="#FFF"/></svg>
                </div>
            </div>
            <div class="w-auto text-black opacity-75 items-center p-4">
          <span class="text-lg font-bold pb-4">
              Heads Up!
          </span>
                <p class="leading-tight">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo!
                </p>
            </div>
        </div>
    </div>





    <div class="contain bg-grey-lighter p-8">
        <div class="sm:flex mb-4">
            <div class="sm:w-1/4 h-auto">
                <div class="text-orange mb-2">Orange</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-orange text-grey-darker">One</li>
                    <li class="hover:text-orange text-grey-darker">Two</li>
                    <li class="hover:text-orange text-grey-darker">Three</li>
                    <li class="hover:text-orange text-grey-darker">Four</li>
                    <li class="hover:text-orange text-grey-darker">Five</li>
                    <li class="hover:text-orange text-grey-darker">Six</li>
                    <li class="hover:text-orange text-grey-darker">Seven</li>
                    <li class="hover:text-orange text-grey-darker">Eight</li>
                </ul>
            </div>
            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
                <div class="text-blue mb-2">Blue</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-blue text-grey-darker">One</li>
                    <li class="hover:text-blue text-grey-darker">Two</li>
                    <li class="hover:text-blue text-grey-darker">Three</li>
                </ul>

                <div class="text-blue-light mb-2 mt-4">Blue-light</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-blue-light text-grey-darker">One</li>
                    <li class="hover:text-blue-light text-grey-darker">Two</li>
                    <li class="hover:text-blue-light text-grey-darker">Three</li>
                </ul>

            </div>
            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
                <div class="text-green-dark mb-2">Green-dark</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-green-dark text-grey-darker">One</li>
                    <li class="hover:text-green-dark text-grey-darker">Two</li>
                    <li class="hover:text-green-dark text-grey-darker">Three</li>
                </ul>

                <div class="text-green-light mb-2 mt-4">Green-light</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-green-light text-grey-darker">One</li>
                    <li class="hover:text-green-light text-grey-darker">Two</li>
                    <li class="hover:text-green-light text-grey-darker">Three</li>
                </ul>


            </div>
            <div class="sm:w-1/2 sm:mt-0 mt-8 h-auto">
                <div class="text-red-light mb-2">Newsletter</div>
                <p class="text-grey-darker leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, consectetur. </p>
                <div class="mt-4 flex">
                    <input type="text" class="p-2 border border-grey-light round text-grey-dark text-sm h-auto" placeholder="Your email address">
                    <button class="bg-orange text-white rounded-sm h-auto text-xs p-3">Subscribe</button>
                </div>
            </div>

        </div>
    </div>




    <section class="bg-white py-8 w-full">
        <div class="container mx-auto px-8">
            <div class="table w-full">
                <div class="block sm:table-cell">
                    <p class="uppercase text-grey text-sm sm:mb-6">Links</p>
                    <ul class="list-reset text-xs mb-6">
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">FAQ</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Help</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="block sm:table-cell">
                    <p class="uppercase text-grey text-sm sm:mb-6">Legal</p>
                    <ul class="list-reset text-xs mb-6">
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Terms</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="block sm:table-cell">
                    <p class="uppercase text-grey text-sm sm:mb-6">Social</p>
                    <ul class="list-reset text-xs mb-6">
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Facebook</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Linkedin</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="block sm:table-cell">
                    <p class="uppercase text-grey text-sm sm:mb-6">Company</p>
                    <ul class="list-reset text-xs mb-6">
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Official Blog</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">About Us</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 sm:block sm:mr-0">
                            <a href="#" class="text-grey hover:text-grey-dark">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
