@include('includes.header')
@include('includes.navbar')
<div class="container mt-5">
        <h2 class="mb-4">Contact Me</h2>
        
        <form>
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>

            <div class="mt-2 form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>

            <div class="mt-2 form-group">
                <label for="message">Your Message:</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
            </div>

            <button type="submit" class="btn btn-info mt-3">Submit</button>
        </form>
    </div>
    @include('includes.footer')