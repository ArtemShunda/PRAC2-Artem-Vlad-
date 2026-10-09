<x-layouts.app>
    <div style="margin: auto;">
        <h1>Contactformulier</h1>

        <p>
            Heb je een vraag over onze handleidingen?
            Vul het formulier in.
        </p>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Naam</label>
                <input type="text" id="name" name="name"
                       class="form-control" placeholder="Je naam">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mailadres</label>
                <input type="email" id="email" name="email"
                       class="form-control" placeholder="Je e-mailadres">
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Onderwerp</label>
                <input type="text" id="subject" name="subject"
                       class="form-control" placeholder="Onderwerp">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Bericht</label>
                <textarea id="message" name="message"
                          class="form-control" rows="5"
                          placeholder="Typ je bericht..."></textarea>
            </div>

            <button type="button" class="btn btn-primary">
                Versturen
            </button>
        </form>
    </div>
</x-layouts.app>
