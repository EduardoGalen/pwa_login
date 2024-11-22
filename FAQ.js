import React from 'react';
import './FAQ.css'; // Asegúrate de crear este archivo CSS

const FAQ = () => {
    return (
        <div className="container mt-5">
            <div className="faq-header">
                <h1 className="faq-title">Preguntas Frecuentes</h1>
                <p className="faq-subtitle">Si no logras resolver tu duda, contáctanos</p>
            </div>
            <div className="faq-list">
                <div className="faq-item">
                    <h5 className="faq-question">¿Cuál es el horario de atención?</h5>
                    <p className="faq-answer">
                        Nuestro horario de atención es de lunes a viernes de 9:00 a 18:00 horas.
                    </p>
                </div>

                <div className="faq-item">
                    <h5 className="faq-question">¿Cómo puedo contactarlos?</h5>
                    <p className="faq-answer">
                        Puedes contactarnos a través del formulario en la sección de "Contáctanos" o enviando un correo a info@ejemplo.com.
                    </p>
                </div>

                <div className="faq-item">
                    <h5 className="faq-question">¿Ofrecen soporte técnico?</h5>
                    <p className="faq-answer">
                        Sí, ofrecemos soporte técnico a nuestros usuarios. Puedes contactarnos para más detalles.
                    </p>
                </div>
            </div>
        </div>
    );
};

export default FAQ;
