<?php include('includes/head.php'); ?>

<?php include('includes/header.php'); ?>
<main id="content">

        <div class="container py-6">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 mb-4">Contact Me</h1>
                        <!-- line -->
                        <div class="holder">
                <div class="line line1"></div>
                <div class="line line2"></div>
            </div>                    
            <p class="lead text-secondary">Ask me about anything.</p>
                </div>
            </div>
        </div>

        <div class="bg-white text-black">
            <div class="container py-2">
                <div class="bg-white mt-n6 px-3 px-lg-0">
                    <div class="row justify-content-center py-4 py-lg-5">
                        <div class="col-md-10 col-lg-8">
                            <p>Fields marked with an <span class="text-primary">*</span> are required.</p>
                            <form class="py-4">
                                <div class="form-group">
                                    <label for="inputName">Name <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Enter your name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email <span class="text-primary">*</span></label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email address" required="">
                                </div>
                                <div class="form-group">
                                    <label for="messageTetxarea">Message <span class="text-primary">*</span></label>
                                    <textarea class="form-control" id="messageTetxarea" rows="9" placeholder="Enter your message" required=""></textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="inputCheck">
                                    <label class="form-check-label small" for="inputCheck">I agree with the <a href="#">terms and conditions</a> </label>
                                </div>
                                <button type="submit" class="btn btn-pill btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/call-to-action.php'); ?>
    </main>

<?php include('includes/footer.php'); ?>