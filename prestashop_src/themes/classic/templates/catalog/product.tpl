{** * Copyright since 2007 PrestaShop SA and Contributors * PrestaShop is an
International Registered Trademark & Property of PrestaShop SA * * NOTICE OF
LICENSE * * This source file is subject to the Academic Free License 3.0
(AFL-3.0) * that is bundled with this package in the file LICENSE.md. * It is
also available through the world-wide-web at this URL: *
https://opensource.org/licenses/AFL-3.0 * If you did not receive a copy of the
license and are unable to * obtain it through the world-wide-web, please send an
email * to license@prestashop.com so we can send you a copy immediately. * *
DISCLAIMER * * Do not edit or add to this file if you wish to upgrade PrestaShop
to newer * versions in the future. If you wish to customize PrestaShop for your
* needs please refer to https://devdocs.prestashop.com/ for more information. *
* @author PrestaShop SA and Contributors
<contact@prestashop.com>
  * @copyright Since 2007 PrestaShop SA and Contributors * @license
  https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0) *}
  {extends file=$layout} {block name='head' append}
  <meta property="og:type" content="product" />
  {if $product.cover}
  <meta property="og:image" content="{$product.cover.large.url}" />
  {/if} {if $product.show_price}
  <meta
    property="product:pretax_price:amount"
    content="{$product.price_tax_exc}"
  />
  <meta
    property="product:pretax_price:currency"
    content="{$currency.iso_code}"
  />
  <meta property="product:price:amount" content="{$product.price_amount}" />
  <meta property="product:price:currency" content="{$currency.iso_code}" />
  {/if} {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}" />
  <meta property="product:weight:units" content="{$product.weight_unit}" />
  {/if} {/block} {block name='head_microdata_special'} {include
  file='_partials/microdata/product-jsonld.tpl'} {/block} {block name='content'}
  {block name='page_header_container'} {block name='page_header'}
  <h1 class="h1">{block name='page_title'}{$product.name}{/block}</h1>
  {/block} {/block}

  <section id="main">
    <meta content="{$product.url}" />

    <div class="row product-container js-product-container">
      <div style="width: 100%">
        <div class="col-md-6">
          {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'} {include
            file='catalog/_partials/product-flags.tpl'} {block
            name='product_cover_thumbnails'} {include
            file='catalog/_partials/product-cover-thumbnails.tpl'} {/block}
            <div class="scroll-box-arrows">
              <i class="material-icons left">&#xE314;</i>
              <i class="material-icons right">&#xE315;</i>
            </div>

            {/block}
          </section>
          {/block}
        </div>
        <div class="col-md-6">
          {block name='product_prices'} {include
          file='catalog/_partials/product-prices.tpl'} {/block} {block
          name='product_quantities'} {if $product.show_quantities}
          <div class="product-quantities">
            <label class="label">{l s='In stock' d='Shop.Theme.Catalog'}</label>
            <span
              data-stock="{$product.quantity}"
              data-allow-oosp="{$product.allow_oosp}"
              >{$product.quantity} {$product.quantity_label}</span
            >
          </div>
          {/if} {/block}

          <div class="product-information">
            {block name='product_description_short'}
            <div
              id="product-description-short-{$product.id}"
              class="product-description"
            >
              {$product.description_short nofilter}
            </div>
            {/block} {if $product.is_customizable &&
            count($product.customizations.fields)} {block
            name='product_customization'} {include
            file="catalog/_partials/product-customization.tpl"
            customizations=$product.customizations} {/block} {/if}

            <div class="product-actions js-product-actions">
              {block name='product_buy'}
              <form
                action="{$urls.pages.cart}"
                method="post"
                id="add-to-cart-or-refresh"
              >
                <input type="hidden" name="token" value="{$static_token}" />
                <input
                  type="hidden"
                  name="id_product"
                  value="{$product.id}"
                  id="product_page_product_id"
                />
                <input
                  type="hidden"
                  name="id_customization"
                  value="{$product.id_customization}"
                  id="product_customization_id"
                  class="js-product-customization-id"
                />

                {block name='product_variants'} {include
                file='catalog/_partials/product-variants.tpl'} {/block} {block
                name='product_pack'} {if $packItems}
                <section class="product-pack">
                  <p class="h4">
                    {l s='This pack contains' d='Shop.Theme.Catalog'}
                  </p>
                  {foreach from=$packItems item="product_pack"} {block
                  name='product_miniature'} {include
                  file='catalog/_partials/miniatures/pack-product.tpl'
                  product=$product_pack
                  showPackProductsPrice=$product.show_price} {/block} {/foreach}
                </section>
                {/if} {/block} {block name='product_discounts'} {include
                file='catalog/_partials/product-discounts.tpl'} {/block} {block
                name='product_add_to_cart'} {include
                file='catalog/_partials/product-add-to-cart.tpl'} {/block}
                {block name='product_additional_info'} {include
                file='catalog/_partials/product-additional-info.tpl'} {/block}
                {* Input to refresh product HTML removed, block kept for
                compatibility with themes *} {block
                name='product_refresh'}{/block}
              </form>
              {/block}
            </div>

          </div>
        </div>
      </div>
      <div id="dropdown-div">
        <ul class="dropdown">
          <li>
            <span>Koszty Dostawy</span>
            <ul class="dropdown-content" style="display: none;">
              <li>Kurier DHL: 13 zł (1-2 dni)</li>
              <li>Automaty DHL BOX i punkty POP: 11 zł (1-2 dni)</li>
              <li>Inpost Paczkomaty: 15 zł (1-2 dni)</li>
              <li>Inpost Kurier: 13 zł (1-2 dni)</li>
              <li>
                Kurier Pocztex Odbiór w Punkcie (Placówki pocztowe, Żabka): 13
                zł (1-2 dni)
              </li>
              <li>Kurier za pobraniem: 17 zł (1-2 dni)</li>
              <li>Odbiór osobisty w Płocku: Darmowy (natychmiast)</li>
              <li>Darmowa Wysyłka już od 300 zł wartości Zamówienia</li>
              <p>
                Opcja płatności za pobraniem nie jest dostępna dla wysyłek z
                odbiorem w punkcie oraz do Paczkomatów.
              </p>
            </ul>
          </li>
          <li>
            <span>Czas realizacji</span>
            <ul class="dropdown-content" style="display: none;">
              <p>
                Proszę pamiętaj że na czas otrzymania przez Ciebie zamówienia
                (Termin dostawy) składają się: Czas realizacji danego produktu +
                Czas dostawy wybranej opcji kurierskiej. Jeżeli produkt jest
                oznaczony na zielono jako dostępny to oznacza że jest on
                bezpośrednio u nas w magazynie i zazwyczaj wysyłamy go w ciągu
                24h. I do tego musisz doliczyć czas wybranej opcji dostawy.
                Jeżeli produkt jest oznaczony inaczej, to znaczy że nie znajduje
                się bezpośrednio na półce w naszym magazynie i musimy go
                sprowadzić od naszych stałych dostawców. Wtedy sam Czas
                realizacji jest nieco dłuższy. Proszę pamiętaj również że jeśli
                Twoje zamówienie składa się z produktów dostępnych i z dłuższym
                czasem realizacji, to będzie ono wysyłane dopiero po pełnym
                skompletowaniu zamówienia.
              </p>
            </ul>
          </li>
          <li>
            <span>Metody płatności</span>
            <ul class="dropdown-content" style="display: none;">
              <li>
                Autopay (Elektroniczne przelewy, PayPo, Karty, BLIK, Visa
                Mobile)
              </li>
              <li>
                Przelewy24 (Elektroniczne przelewy, Karty, BLIK, PayPo, Google
                Pay, Raty)
              </li>
              <li>PayNow (Elektroniczne przelewy, Karty, BLIK)</li>
              <li>PayPo (opcja dostępna w bramce Autopay oraz Przelewy24)</li>
              <li>Przelew tradycyjny</li>
              <li>Płatność przy odbiorze</li>
              <li>Elastyczne płatności (wkrótce)</li>
            </ul>
          </li>
          <li>
            <span>Dlaczego warto wybrać Dystryktzero.pl</span>
            <ul class="dropdown-content">
              <li>Sprawdzony i bezpieczny sklep</li>
              <li>Bezproblemowe zwroty i reklamacje</li>
              <li>Tylko oryginalne produkty</li>
              <li>Szybka realizacja wysyłek</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <script>
      const dropdownItems = document.querySelectorAll(".dropdown li");

      dropdownItems.forEach((item) => {
        item.addEventListener("click", () => {
          const content = item.querySelector(".dropdown-content");
          content.style.display =
            content.style.display === "block" ? "none" : "block";
        });
      });
    </script>

    {if $product.description}
    <div class="tab-list-title">
      <h2>{l s='Description' d='Shop.Theme.Catalog'}</h2>
      <div class="product-description">{$product.description nofilter}</div>
    </div>
    {/if}

    <div class="tab-list-title">
      <h2>Cechy</h2>
    </div>

    {block name='product_details'} {include
    file='catalog/_partials/product-details.tpl'} {/block} {block
    name='product_accessories'} {if $accessories}
    <section class="product-accessories clearfix">
      <p class="h5 text-uppercase">
        {l s='You might also like' d='Shop.Theme.Catalog'}
      </p>
      <div class="products row">
        {foreach from=$accessories item="product_accessory" key="position"}
        {block name='product_miniature'} {include
        file='catalog/_partials/miniatures/product.tpl'
        product=$product_accessory position=$position productClasses="col-xs-12
        col-sm-6 col-lg-4 col-xl-3"} {/block} {/foreach}
      </div>
    </section>
    {/if} {/block} {block name='product_footer'} {hook h='displayFooterProduct'
    product=$product category=$category} {/block} {block
    name='product_images_modal'} {include
    file='catalog/_partials/product-images-modal.tpl'} {/block} {block
    name='page_footer_container'}
    <footer class="page-footer">
      {block name='page_footer'}
      <!-- Footer content -->
      {/block}
    </footer>
    {/block}
  </section>

  {/block}
</contact@prestashop.com>
