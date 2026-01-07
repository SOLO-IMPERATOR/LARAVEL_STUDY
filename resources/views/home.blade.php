<x-layout>
    <div class="max-w-2xl mx-auto">
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">

                  <!-- Chirp Form -->
                <div class="card bg-base-100 shadow mt-8">
                    <div class="card-body">
                        <form method="POST" action="/user_message">
                            @csrf
                            <select name="user_id">
                                @foreach ($users as $user)
                                    <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                @endforeach
                            </select>
                            <div class="form-control w-full">
                                <textarea
                                    name="message"
                                    placeholder="What's on your mind?"
                                    class="textarea textarea-bordered w-full resize-none"
                                    rows="4"
                                    maxlength="255"
                                    required
                                ></textarea>
                            </div>

                            <div class="mt-4 flex items-center justify-end">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Chirp
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
                    <p class="mt-4 text-base-content/60">This is your brand new Laravel application. Time to make it
                        sing (or chirp)!</p>
                </div>
                <span class="text-info">Всего пользовтелей: {{ $count }}</span>
                @forelse ($users as $user)  
                    <x-usercart :user="$user"/>
                @empty
                    <span class="text-warning">пользовтелей нет</span>
                
                @endforelse
            </div>
        </div>
    </div>
</x-layout>