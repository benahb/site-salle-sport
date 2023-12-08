@extends('base')

@section('title' , 'contact')

@section('content')

    
    
    <section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-text"><span>C</span>ontact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Possimus, eum velit.</p>
        </div>
        <div class="contactform">
            <h3>envoyer un message</h3>
            <div class="inputboite">
                <input type="text" placeholder="votre demande">
            </div>
            <div class="inputboite">
                <input type="text" placeholder="email">
            </div>
            <div class="inputboite">
                <textarea placeholder="message"></textarea>
            </div>
            <div class="inputboite">
                <input type="submit" value="envoyer">
            </div>
     </div>
    <div class="cordonnee">
            <h2>Nos Cordonnées</h2>
            <p>téléphone : le 06 00 00 00 00</p>
            <p>adresse : 5 Bd Louis XIV, 59800 Lille</p>
            <p>support@fitown.com</p>
        <div class="google">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9155085751745!2d3.0678293758054056!3d50.62868637451531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1702054575326!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="copyright">
            <h5>Copyright 2023 Fitown<span> Tous les droits Réservés</span></h5> 

        </div>
    </div>
        
</section>
@endsection