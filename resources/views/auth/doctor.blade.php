<x-basic>
   

    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen overflow-hidden">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(/images/doctor.jpg); background-size: cover; background-position: top;">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Mama Care</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">Maternal Health Monitoring System  </p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6 h-10/12 overflow-y-auto">
                <div class="mt-8 mb-8">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Doctor Registration</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign up to engage with wonderful expectant women</p>
                    </div>

                    <div class="p-4">
                        <form method="POST" action="/register" >
                            @csrf
                            <div>
                                <label for="firstname" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">First Name</label>
                                <input type="text" name="firstname" id="firstname" placeholder="Christopher" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-formerror name='firstname'></x-formerror>
                            </div>
                            <div class="mt-4">
                                <label for="secondname" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Second Name</label>
                                <input type="text" name="secondname" id="secondname" placeholder="Tucker" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-formerror name='secondname'></x-formerror>
                            </div>
                            <div class="mt-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200 ">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-formerror name='email'></x-formerror>
                            </div>

                            <div class="mt-4">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>                               
                                </div>

                                <input type="text" name="password" id="password" placeholder="Your Password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-formerror name='password'></x-formerror>
                            </div>
                            
                            <div class="mt-4">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Repeat Password</label>                              
                                </div>

                                <input type="text" name="password_confirmation" id="password_confirmation" placeholder="confirm password"required class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-formerror name='password_confirmation'></x-formerror>
                            </div>

                            <div class="mt-4">
                                <div class="flex justify-between mb-2">
                                    <label for="phonenumber" class="text-sm text-gray-600 dark:text-gray-200">Phone Number</label>                              
                                </div>

                                <input  name="phonenumber" id="phonenumber" placeholder="0712345678" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-formerror name='phonenumber'></x-formerror>
                            </div> 
                            
                            <div class="mt-4">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Sign 
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Not new here  ? <a href="/login" class="text-blue-500 focus:outline-none focus:underline hover:underline">Login</a>.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    

</x-basic>