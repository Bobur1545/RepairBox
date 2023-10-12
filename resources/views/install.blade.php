<!DOCTYPE html>
<html lang="{{ config('app.locale', 'en') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Repair box installation and setup</title>
    <link rel="shortcut icon" href="/images/default/icon.png">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen h-auto bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500">
        <div class="flex h-full p-8">
            <div class="m-auto">
                <div class="bg-gray-100 shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-8 border-b border-gray-200 sm:px-6">
                        <div class="flex justify-center items-center">
                            <img alt="App logo" class="h-12" src="/images/default/icon.png">
                            <h2 class="pl-6 uppercase font-medium text-2xl text-gray-800">Repair Box Installation | <a target="_blank" href="https://bit.ly/3Iparq4">NULLED Scripts!</a></h2>
                        </div>
                        @if (isset($error))
                            <div class="bg-red-100 border-l-4 border-red-500 p-4 mb-3">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm leading-5 text-red-700">
                                            {{ $error }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (isset($message))
                            <div class="bg-green-100 border-l-4 border-green-500 p-4 mb-3">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm leading-5 text-green-700">
                                            {{ $message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="px-4 py-5 sm:px-6 bg-white">
                        @if (isset($output))
                            <div class="flex justify-between">
                                <div class="overflow-auto h-72 bg-black text-xs text-green-400 col-span-2 w-1/2 px-4">
                                    <pre>{{ $output }}</pre>
                                </div>
                                <div class="col-span-2 w-1/2 px-4">
                                    <div>
                                        <p class="pb-3 text-gray-800">
                                            <strong>Website address</strong>
                                            <br>
                                            Your website is located at this URL
                                        </p>
                                        <p class="pb-3">
                                            <a class="text-blue-500 hover:underline"
                                                href="{{ $path }}/install.php">{{ $path }}</a>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="pb-3 text-gray-800">
                                            <strong>Administration Area</strong>
                                            <br>
                                            Use the following link to log into the administration area:
                                        </p>
                                        <p class="pb-3">
                                            <a class="text-blue-500 hover:underline"
                                                href="/install.php">{{ $path }}/auth/login</a>
                                        </p>
                                        <p class="pb-3 text-gray-800">
                                            Email: <strong>admin@admin.com</strong>
                                            <br>
                                            Password: <strong>12345678</strong>
                                        </p>

                                        <p class="pb-3 text-gray-800">
                                            Don't forget to change your username and password after successful
                                            installation.
                                        </p>
                                        <p>
                                         <a class="text-blue-500 hover:underline"
                                                href="{{ $path }}/install.php">Close installation</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @else
                            @if ($case === 'environment')
                                <div class="flex justify-between">
                                    <div class="col-span-2 w-1/2 px-4">
                                        <div class="flex flex-wrap rounded-md mb-4">
                                            <div class="w-full px-4 py-2">
                                                PHP Version
                                                <small>(>={{ 7.3 }})</small>
                                                <span class="float-right">
                                                    @if (version_compare(PHP_VERSION, 7.3, '>'))
                                                        <svg class="w-6 h-6 text-green-600"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    @else
                                                        <svg class="w-6 h-6 text-red-600"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    @endif
                                                </span>
                                            </div>
                                            @php
                                                $missing = false;
                                            @endphp
                                            @foreach (['pdo', 'mbstring', 'fileinfo', 'openssl', 'tokenizer', 'json', 'curl', 'xml','zip','gd','iconv','simplexml','xmlreader','zlib'] as $extention)
                                                <div class="w-full px-4 py-2">
                                                    @if (extension_loaded($extention))
                                                        PHP {{ $extention }} extension loaded
                                                        <span class="float-right">
                                                            <svg class="w-6 h-6 text-green-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    @else
                                                        <span class="text-red-600"> PHP {{ $extention }} extension
                                                            is missing</span>

                                                        @php
                                                            $missing = true;
                                                        @endphp
                                                        <span class="float-right">

                                                            <svg class="w-6 h-6 text-red-600"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    @endif
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="col-span-2 w-1/2 px-4">

                                        <form method="post" action="/install.php">
                                            @csrf
                                            <a href="https://codehas.gitbook.io/repair-box/get-started/repair-box-installation" class="text-blue-500 hover:underline" target="_blank" rel="noopener">Let's read complete guideline about proper installation step by step if you are facing any issue.</a>
                                            <input type="hidden" name="case" value="environment">
                                            <div class="mb-3 mt-6">
                                                <label for="database_hostname"
                                                    class="block font-medium leading-5 text-gray-700 pb-2">Database host
                                                    <span class="text-red-400">*</span></label>
                                                <input
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="database_hostname" type="text" name="database_hostname"
                                                    value="{{ old('database_hostname', '127.0.0.1') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="database_port"
                                                    class="block font-medium leading-5 text-gray-700 pb-2">Database port
                                                    <span class="text-red-400">*</span></label>
                                                <input
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="database_port" type="text" name="database_port"
                                                    value="{{ old('database_port', '3306') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="database_name"
                                                    class="block font-medium leading-5 text-gray-700 pb-2">Database name
                                                    <span class="text-red-400">*</span></label>
                                                <input
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="database_name" type="text" name="database_name"
                                                    value="{{ old('database_name', 'test') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="database_username"
                                                    class="block font-medium leading-5 text-gray-700 pb-2">Database
                                                    username
                                                    <span class="text-red-400">*</span></label>
                                                <input
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="database_username" type="text" name="database_username"
                                                    value="{{ old('database_username', 'root') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="database_password"
                                                    class="block font-medium leading-5 text-gray-700 pb-2">Database
                                                    password</label>
                                                <input
                                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    id="database_password" type="password" name="database_password"
                                                    value="{{ old('database_password') }}">
                                            </div>

                                            <div class="flex justify-end">
                                                @if ($missing)
                                                    <a href="/install.php"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                                        Fixed ? Reload !
                                                    </a>
                                                @else
                                                    <button type="submit"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                                        Save database credentials
                                                        <svg class="fill-current w-5 h-5 ml-3"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="flex justify-between">
                                    <div class="col-span-2 w-1/2 px-4">
                                        <p class="pb-3 text-gray-800">The installation of the database and the loading
                                            of all the basic data of the application will be carried out.</p>
                                        <p class="pb-3 text-gray-800">
                                            This may take a while, please wait and don't close the page.
                                        </p>

                                    </div>
                                    <div class="col-span-2 w-1/2 px-4 pt-8">
                                        <form method="post" action="/install.php">
                                            @csrf
                                            <input type="hidden" name="case" value="complete">
                                            <button type="submit"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                                Complete installation
                                                <svg class="fill-current w-5 h-5 ml-3"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                    <p class="border-t p-5 text-gray-800">
                        <strong>Support and questions</strong>
                        <br>
                        If you need support, please send me an email using the contact form on my envato user page. I
                        usually respond to support requests within 24 hours so please feel free to contact me with
                        problems of any kind or even simple questions, I don’t mind responding.
                        <br>
                        <a class="text-blue-500 hover:underline"  rel="noopener" href="https://codecanyon.net/user/rose-finch"
                            target="_blank" rel="nofollow">https://codecanyon.net/user/rose-finch</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
