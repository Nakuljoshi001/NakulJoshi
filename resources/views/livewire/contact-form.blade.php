<div>
    @if (session()->has('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <input type="text" wire:model="name" placeholder="Your Name">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror

        <input type="email" wire:model="email" placeholder="Your Email">
        @error('email') <span style="color: red;">{{ $message }}</span> @enderror

        <textarea wire:model="message" placeholder="Your Message"></textarea>
        @error('message') <span style="color: red;">{{ $message }}</span> @enderror

        <button type="submit">Send Message</button>
    </form>
</div>
