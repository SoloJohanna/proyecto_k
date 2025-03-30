<div class="contact-section" id="contacto">
    <div class="contact-section-frame">
        <div class="contact-section-info">
            <p>contáctanos o déjanos tus datos</p>
            <h1>Apuesta por un proyecto que acompaña tu estilo de vida.</h1>
            <p>nuestro equipo de ventas te entregará una asesoría personalizada para encontrar la mejor opción para ti.</p>
        </div>
        <form method="post" action="{{route('contactanos.store')}}" class="contact-section-form">
            @csrf
            <input name="nombre" type="text" class="input-name" placeholder="NOMBRE Y APELLIDO">
            <input name="telefono" type="text" class="input-phone" placeholder="TELÉFONO">
            <input name="correo" type="text" class="input-email" placeholder="CORREO">
            <textarea name="mensaje" id="" class="input-message" placeholder="MENSAJE"></textarea>
            <input type="submit" href="" class="btn-contact-send" value="ENVIAR"></input>
        </form>
        @if (session('info'))
            <script>
                Swal.fire({
                    title: "Confirmacion",
                    text: "{{session('info')}}",
                    icon: "success",
                    iconColor:"white",
                    theme:"dark",
                    cancelButtonText: "Ok",
                    showCancelButton: true,
                    showCloseButton: false,
                    showConfirmButton:false,
                });
            </script>
        @endif
    </div>
</div>