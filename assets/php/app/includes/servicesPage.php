<!--==================== SPRAY FORM ====================-->
<section class="spray section" id="spray">
            <h3 class="section__subtitle">
                Pest Control<span> services</span>
            </h3>
 
            <h2 class="section__title">
                Request Pest Control Services
            </h2>
 
            <div class="contact__container container grid">
                <form action="" class="contact__form" id="spray-form">
                    <div class="contact__group">
                        <input type="text"  id="customer_name" name="customer_name" required placeholder="Enter your name" class="contact__input spray__input">
                        <input type="email" id="customer_emial" name="customer_email" required placeholder="Enter your email" class="contact__input spray__input">
                        <input type="text" id="pest_name" name="pest_name" required placeholder="Enter pest name" class="contact__input spray__input">                    
                    </div>

                    <p class="section__subtitle">
                        Give Us Your<span> Location</span>
                    </p>

                    <div class="checkbox">

                        
                        
                        <p class="chk-p" id="checkbox_data">
                            <input type="checkbox" name="chk-blantyre" placeholder="Blantyre" class="contact__input">Blantyre
                        </p>

                        <p class="chk-p" id="checkbox_data">
                            <input type="checkbox" name="chk-lilongwe" placeholder="Lilongwe" class="contact__input">Lilongwe
                        </p>

                        <p class="chk-p" id="checkbox_data">
                            <input type="checkbox" name="chk-mzuzu" class="contact__input">Mzuzu
                        </p>
                    </div>

                    <p class="section__subtitle">
                        Set a <span> Date</span> and <span>Time</span>
                    </p>
                    <input type="datetime-local" class="contact__input time" id="spray_date">
 
                    <textarea name="customer_project" required placeholder="Enter a short description here" class="contact__input"></textarea>

                 
                    <p class="contact__message" id="spray_message"></p>
                    <button type="submit" class="button contact__button">Submit Details</button>
                </form>
            </div>
         </section>