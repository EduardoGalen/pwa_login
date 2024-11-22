import React, { useState } from 'react';
import './CitaForm.css';

const CitaForm = () => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        appointment_time: '',
        notes: '',
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({ ...formData, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        // Usamos formData en lugar de variables no definidas
        const data = {
          name: formData.name,
          email: formData.email,
          appointment_time: formData.appointment_time,
          notes: formData.notes,
        };
        const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

        try {
            const response = await fetch('http://127.0.0.1:8000/admin/citas', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,  // Agrega el token CSRF aquí
                },
                body: JSON.stringify(data),
            });

            if (response.ok) {
                alert('Cita agendada con éxito');
            } else {
                const errorData = await response.json();
                console.error('Error:', errorData);
                alert('Hubo un problema al agendar la cita.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Hubo un error al enviar la cita.');
        }

    };

    return (
        <div className="container text-center mt-5 p-5" style={{ backgroundColor: '#f8d7da', borderRadius: '15px', boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)' }}>
            <h2 style={{ fontFamily: "'Cardinal', serif", fontSize: '3rem', color: '#343a40', letterSpacing: '2px', textShadow: '2px 2px 4px rgba(0, 0, 0, 0.1)' }}>
                Agendar Cita
            </h2>

            <form onSubmit={handleSubmit}>
                <div className="form-group">
                    <label htmlFor="name">Nombre</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        className="form-control"
                        value={formData.name}
                        onChange={handleChange}
                        required
                    />
                </div>

                <div className="form-group">
                    <label htmlFor="email">Correo Electrónico</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        className="form-control"
                        value={formData.email}
                        onChange={handleChange}
                        required
                    />
                </div>

                <div className="form-group">
                    <label htmlFor="appointment_time">Fecha y Hora de la cita</label>
                    <input
                        type="datetime-local"
                        name="appointment_time"
                        id="appointment_time"
                        className="form-control"
                        value={formData.appointment_time}
                        onChange={handleChange}
                        required
                    />
                </div>

                <div className="form-group">
                    <label htmlFor="notes">Notas</label>
                    <textarea
                        name="notes"
                        id="notes"
                        className="form-control"
                        rows="3"
                        value={formData.notes}
                        onChange={handleChange}
                    />
                </div>

                <button type="submit" className="btn btn-primary" style={{ backgroundColor: '#ff69b4', border: 'none', padding: '10px 30px', fontSize: '1.2rem', borderRadius: '50px', transition: 'background-color 0.3s ease' }}>
                    Agendar Cita
                </button>
            </form>
        </div>
    );
};

export default CitaForm;
