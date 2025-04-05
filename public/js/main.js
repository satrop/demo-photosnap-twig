(() => {
  // src/templates/components/price-card/pricing.js
  document.addEventListener("DOMContentLoaded", function() {
    const toggle = document.querySelector('[data-action="toggle-billing"]');
    const cards = document.querySelectorAll(".price-card");
    let isYearly = false;
    function updatePrices() {
      cards.forEach((card) => {
        const priceEl = card.querySelector(".price-card__price");
        const periodEl = card.querySelector(".price-card__period");
        const basePrice = parseInt(
          priceEl.dataset.basePrice || priceEl.textContent.replace(/[^0-9]/g, "")
        );
        if (isYearly) {
          priceEl.textContent = "$" + (basePrice * 12).toFixed(2);
          periodEl.textContent = "per year";
        } else {
          priceEl.textContent = "$" + basePrice.toFixed(2);
          periodEl.textContent = "per month";
        }
        priceEl.dataset.basePrice = basePrice;
      });
    }
    toggle?.addEventListener("click", function() {
      isYearly = !isYearly;
      this.setAttribute("aria-checked", isYearly);
      this.classList.toggle("price-toggle__switch--yearly", isYearly);
      const monthlyLabel = document.querySelector(".price-toggle__label:first-of-type");
      const yearlyLabel = document.querySelector(".price-toggle__label:last-of-type");
      monthlyLabel.classList.toggle("price-toggle__label--active", !isYearly);
      yearlyLabel.classList.toggle("price-toggle__label--active", isYearly);
      updatePrices();
    });
  });
})();
