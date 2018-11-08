<div class="order">
    <div class="order-body">
        <div class="close-order">
            <div class="close-order__text">Закрыть</div>
            <div class="close-order-icon">
                <div class="line line--left"></div>
                <div class="line line--right"></div>
            </div>
        </div>
        <h2 class="section-title text-white mb-4">
            Заказ бутилированной воды
        </h2>
        <form id="form-order">
            <div class="form-row d-flex flex-column justify-content-start align-items-start">
                <div class="form-group">
                    <label for="user-name--order" class="label-placeholder label-placeholder--name">
                        Введите имя
                    </label>
                    <input type="text" name="name" class="form-control" id="user-name--order" required>
                </div>
                <div class="form-group">
                    <label for="user-phone--order" class="label-placeholder label-placeholder--phone">
                        Номер Вашего телефона
                    </label>
                    <input type="tel" name="phone" class="form-control" id="user-phone--order" required>
                </div>
                <div class="form-group">
                    <label for="user-place--order" class="label-placeholder label-placeholder--place">
                        адрес доставки
                    </label>
                    <input type="tel" name="place" class="form-control" id="user-place--order" required>
                </div>
                <div class="form-group">
                    <label for="user-value--order" class="label-placeholder label-placeholder--value">
                        количество бутылей
                    </label>
                    <input type="number" name="place" class="form-control" id="user-value--order" min="1" required>
                </div>
                <div class="form-group">
                    <label for="user-message--order" class="label-placeholder label-placeholder--message">
                        Комментарий
                    </label>
                    <textarea class="form-control" name="message" id="user-message--order" rows="2"></textarea>
                </div>
                <div class="text-right">
                    <button class="btn btn-outline-primary text-white">
                        Заказать воду
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>