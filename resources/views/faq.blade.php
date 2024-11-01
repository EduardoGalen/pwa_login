@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="container text-center mt-5 p-5" style="background-color: #f8d7da; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h1 style="font-family: 'Cardinal', serif; font-size: 3rem; color: #343a40; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);">
                Preguntas Frecuentes
            </h1>
            <p style="color: #6c757d; font-size: 1.2rem;">Si no logras resolver tu duda, contáctanos</p>
        </div>
    <div class="container mt-5">
        <div class="accordion" id="faqAccordion">
            <div class="card">
                <div class="card-header" id="headingOne" style="background: linear-gradient(45deg, #ff69b4, #ff1493); color: white;">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Cuál es el horario de atención?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00 horas.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne" style="background: linear-gradient(45deg, #ff69b4, #ff1493); color: white;">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Cómo puedo contactarlos?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                    <div class="card-body">
                        Puedes contactarnos a través del formulario en la sección de "Contáctanos" o enviando un correo a info@ejemplo.com.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne" style="background: linear-gradient(45deg, #ff69b4, #ff1493); color: white;">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Ofrecen soporte técnico?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                    <div class="card-body">
                        Sí, ofrecemos soporte técnico a nuestros usuarios. Puedes contactarnos para más detalles.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
