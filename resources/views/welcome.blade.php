<!DOCTYPE html>
<div class="text-center text-white">
    <h3 class="mt-6 text-2xl font-bold mb-6">
        プレイヤーログイン
    </h3>
    <div>
        <a href="{{ route('women.login') }}"
            class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">Sign
            in</a>
    </div>

    <p class="flex flex-col items-center justify-center mt-10 text-center text-md">
        <span>Don't have an account?</span>
        <a href="{{ route('women.register') }}"
            class="hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
            up</a>
    </p>

    <div class="text-center text-white">
        <h3 class="mt-6 text-2xl font-bold mb-6">
            ユーザーログイン
        </h3>
        <div>
            <a href="{{ route('user.login') }}"
                class="w-full flex justify-center bg-gradient-to-r from-pink-500 to-purple-600 hover:bg-gradient-to-l hover:from-purple-500 hover:to-pink-600 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">Sign
                in</a>
        </div>
        <p class="flex flex-col items-center justify-center mt-10 text-center text-md">
            <span>Don't have an account?</span>
            <a href="{{ route('user.register') }}"
                class="hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
                up</a>
        </p>

        </html>