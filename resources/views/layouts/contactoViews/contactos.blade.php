<div class="container mt-5">
    <!-- Contact Section -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="text-center mb-3 text-capitalize">Contacto</h3>
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        {{-- realizar cambio de la llave al verificar e correo del cliente  c41326595f927b03237d13066db13680 esta es  la llave a cambiar --}}
                        <form action="https://formsubmit.co/ c41326595f927b03237d13066db13680" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" required placeholder="Tu Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" name="email" required placeholder="Tu Correo Electrónico">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" name="message" rows="5" placeholder="Tu Mensaje"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </form>
                    </div>
                </div>
                <!-- Contact Info -->
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        <h5 class="card-title fw-bold">Información de Contacto</h5>
                        <p class="card-text">
                            <i class="bi bi-geo-alt-fill"></i> <span class="fw-bold">Dirección: </span>  Avenida Balmaceda #365, La Serena, Chile<br>
                            <i class="bi bi-telephone-fill"></i> <span class="fw-bold">Teléfono: </span>  +56 9 6621 0617<br>
                            <i class="bi bi-envelope-fill"></i> <span class="fw-bold">Email: </span> chiledelta@outlook.com
                        </p>
                        <h5 class="card-title mt-4 fw-bold">Síguenos</h5>
                        <div class="d-flex">
                            <a href="https://www.facebook.com/profile.php?id=61552012255753" class="btn btn-outline-primary me-2" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/lamerced_coffe/" class="btn btn-outline-primary me-2" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.tiktok.com/@lamerced_coffe" class="btn btn-outline-primary me-2" target="_blank"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>