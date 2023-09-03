<template>
    <div class="container">
        <div>
            <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" @submit="sendMessage">
                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input v-model="name" type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input v-model="email" type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input v-model="subject" type="text" id="subject" name="subject"
                                            class="form-control">
                                        <label for="subject" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea v-model="message" type="text" id="mess" name="mess" rows="2"
                                            class="form-control md-textarea"></textarea>
                                        <label for="mess">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                            <!--Grid row-->

                        </form>

                        <!-- <div class="text-center text-md-left">
                            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                        </div> -->
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->
                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            form: new Form({
                loaded: false,
        name: null,
        email: null,
        subject: null,
        message: null
            })
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    methods: {
        sendMessage(e) {
            e.preventDefault();
            this.axios.postForm('/contact-us/ajax',{
                name:this.name,
                email:this.email,
                subject:this.subject,
                message:this.message
            }).then(response=>{
                console.log(response);

            }).catch(error=>{
                console.log(error);
            })
        }
    }
}
</script>
