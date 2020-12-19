<div class="container">

    <div style="height: 25px"></div>
    <div class="blog-post">

        <!-- Spacer : CONTACT ME -->
        <h2 class="blog-post-title">CONTACT ME</h2>
        <hr />

        <!-- BLOCK : FORM -->
        <div class="container form-mail">
            <form action="/contact/send" method="POST">

                <!-- Username area -->
                <label class="form-mail" for="fname">
                    <h5 class="text-uppercase mb-0 text-left-when-desktop-center-when-phone">Name</h5>
                </label>
                <input class="form-mail" type="text" id="fname" name="firstname" placeholder="Your name.." required="" />

                <!-- Email area -->
                <label class="form-mail" for="fmail">
                    <h5 class="text-uppercase mb-0 text-left-when-desktop-center-when-phone">EMAIL</h5>
                </label>
                <input class="form-mail" type="text" id="fmail" name="email" placeholder="Your mail.." required="" />

                <!-- Topic area -->
                <label class="form-mail" for="topic">
                    <h5 class="text-uppercase mb-0 text-left-when-desktop-center-when-phone">Topic</h5>
                </label>
                <select class="form-mail" id="topic" name="topic" required="">
                    <option class="form-mail" value="no-topic" disabled="" selected="">Please select topic...</option>
                    <option class="form-mail" value="minecraft-plugin">Minecraft | plugin request</option>
                    <option class="form-mail" value="minecraft-server">Minecraft | server question</option>
                    <option class="form-mail" value="development-web">Development | Web request</option>
                    <option class="form-mail" value="development-other">Development | Other request</option>
                    <option class="form-mail" value="personal">Personal contact</option>
                    <option class="form-mail" value="other">Other</option>
                </select>

                <!-- Subject area -->
                <label class="form-mail" for="subject">
                    <h5 class="text-uppercase mb-0 text-left-when-desktop-center-when-phone">Subject</h5>
                </label>
                <textarea class="form-mail" id="subject" name="subject" placeholder="Write something.." style="height:200px" required="" spellcheck="false"></textarea>

                <!-- Send message area -->
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <input class="form-mail btn-info ml-auto mr-auto" type="submit" value="SEND MESSAGE" />
                    </div>
                </div>

            </form>
        </div>

    </div>
    <div style="height: 50px"></div>
</div>