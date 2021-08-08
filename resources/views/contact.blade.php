<x-app-layout title="contact">

    <h1>Contact</h1>

    
        <form action="/contact" method="post">
        @csrf
            <button class="submit">Send</button>
        </form>
    

</x-app-layout>