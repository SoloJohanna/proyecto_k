<div class="contacto" id="contacto">
    <div class="contact-section-frame contenedor">
        <div class="contact-section-info">
            <p>contáctanos o déjanos tus datos</p>
            <h1>Apuesta por un proyecto que acompaña tu estilo de vida.</h1>
            <p>nuestro equipo de ventas te entregará una asesoría personalizada para encontrar la mejor opción para ti.</p>
        </div>
        <form method="post" action="{{route('contactanos.store')}}" class="contact-section-form" id="contact-form">
            @csrf
            <input name="nombre" type="text" class="input-name" placeholder="NOMBRE Y APELLIDOS">
            <input name="telefono" type="text" class="input-phone" placeholder="TELÉFONO">
            <input name="correo" type="text" class="input-email" placeholder="CORREO">
            <textarea name="mensaje" id="" class="input-message" placeholder="MENSAJE"></textarea>
            <input type="submit" href="" class="btn-contact-send" value="ENVIAR"></input>
        </form>
        <div class="loading-popup" id="loading-popup">
            <div class="loading-content">
                <div class="spinner"></div>
                <p>Enviando tu mensaje, por favor espera...</p>
            </div>
        </div>
        @if ($errors->has('error'))
        <div class="custom-popup" id="custom-popup">
            <div class="popup-content">
                <h2>Error</h2>
                <p>{{ $errors->first('error') }}</p>
                <button class="popup-close" id="popup-close">Cerrar</button>
            </div>
        </div>
        @endif
        @if (session('info'))
            <div class="custom-popup" id="custom-popup">
                <div class="popup-content">
                    <h2>Confirmación</h2>
                    <p>{{session('info')}}</p>
                    <button class="popup-close" id="popup-close">Cerrar</button>
                </div>
            </div>
        @endif
    </div>
</div>