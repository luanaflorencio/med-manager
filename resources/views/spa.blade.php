<x-guest-layout>
    <div x-data="app()" x-on:set-token.window="login($event)">
        <nav class="w-full bg-blue-200 py-2 px-4">
            Med-Manager
            <template x-if="is_logged">
                <div class="">
                    <span x-text="user.name"></span>
                </div>
            </template>

            <template x-if="!is_logged">
                <div x-data="loginForm('{{
                    action( [\App\Http\Controllers\APIAuthController::class, 'login']) 
                    }}')">
                    <form @submit.prevent="login()">
                        <input 
                        class="py-1 shadow-md"
                        type="text"
                        name="email"
                        placeholder="Email"
                        x-model="email">
     
                        <input 
                        class="py-1 shadow-md"
                        type="password"
                        name="password"
                        placeholder="Password"
                        x-model="pw">
     
                        <input 
                        class="rounded-md py-1 px-2 bg-gray-600 text-white shadow-md"
                        type="submit"
                        value="login">
     
                    </form>
                </div>
               
            </template>
        </nav>
        <main>
            <template x-for="item in equipment">
                <div class="">
                    <span class="x-text=item.name"></span>
                </div>
            </template>
        </main>
    </div>
</x-guest-layout>