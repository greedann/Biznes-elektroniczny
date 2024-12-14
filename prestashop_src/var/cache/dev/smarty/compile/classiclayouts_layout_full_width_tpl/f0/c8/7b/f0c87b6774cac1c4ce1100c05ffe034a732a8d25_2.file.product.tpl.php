<?php
/* Smarty version 3.1.48, created on 2024-12-14 15:37:40
  from '/var/www/html/themes/classic/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_675d98345b2874_58952683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c87b6774cac1c4ce1100c05ffe034a732a8d25' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/product.tpl',
      1 => 1734187059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_675d98345b2874_58952683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1346458453675d983459d3c3_47831912', 'head');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_761338613675d98345a17d9_24996577', 'head_microdata_special');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_792518828675d98345a2370_78811372', 'content');
?>

</contact@prestashop.com>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
class Block_1346458453675d983459d3c3_47831912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1346458453675d983459d3c3_47831912',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product" />
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <meta
    property="product:pretax_price:amount"
    content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
"
  />
  <meta
    property="product:pretax_price:currency"
    content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"
  />
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
" />
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
" />
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php }?> <?php
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_761338613675d98345a17d9_24996577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_761338613675d98345a17d9_24996577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'head_microdata_special'} */
/* {block 'page_title'} */
class Block_9106988675d98345a29d6_61605746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_870092263675d98345a27d6_34080240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1 class="h1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9106988675d98345a29d6_61605746', 'page_title', $this->tplIndex);
?>
</h1>
  <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_1459448932675d98345a25d1_99922288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_870092263675d98345a27d6_34080240', 'page_header', $this->tplIndex);
?>
 <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_cover_thumbnails'} */
class Block_408638275675d98345a3e57_90395639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_1740840107675d98345a3926_82369132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_408638275675d98345a3e57_90395639', 'product_cover_thumbnails', $this->tplIndex);
?>

            <div class="scroll-box-arrows">
              <i class="material-icons left">&#xE314;</i>
              <i class="material-icons right">&#xE315;</i>
            </div>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1733368443675d98345a3703_21195651 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1740840107675d98345a3926_82369132', 'page_content', $this->tplIndex);
?>

          </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_prices'} */
class Block_258249531675d98345a4757_11434525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_quantities'} */
class Block_1326650157675d98345a4d41_90112545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
          <div class="product-quantities">
            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
            <span
              data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
              data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"
              ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span
            >
          </div>
          <?php }?> <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_description_short'} */
class Block_184135286675d98345a6876_25139534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div
              id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
              class="product-description"
            >
              <?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

            </div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_29212206675d98345a7a14_13771181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?> <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_292010987675d98345a9be8_77202248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_1717342317675d98345ab769_07867291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_1616212721675d98345aa240_40999040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                <section class="product-pack">
                  <p class="h4">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                  </p>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1717342317675d98345ab769_07867291', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </section>
                <?php }?> <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_788106249675d98345ac759_01687377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_1597276272675d98345acd74_60101436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_1723608499675d98345ad357_56776597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_2189108675d98345ad993_21119687 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_22420497675d98345a8df1_24357334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <form
                action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
"
                method="post"
                id="add-to-cart-or-refresh"
              >
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input
                  type="hidden"
                  name="id_product"
                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                  id="product_page_product_id"
                />
                <input
                  type="hidden"
                  name="id_customization"
                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                  id="product_customization_id"
                  class="js-product-customization-id"
                />

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292010987675d98345a9be8_77202248', 'product_variants', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1616212721675d98345aa240_40999040', 'product_pack', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788106249675d98345ac759_01687377', 'product_discounts', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1597276272675d98345acd74_60101436', 'product_add_to_cart', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1723608499675d98345ad357_56776597', 'product_additional_info', $this->tplIndex);
?>

                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2189108675d98345ad993_21119687', 'product_refresh', $this->tplIndex);
?>

              </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_details'} */
class Block_1662749509675d98345aea92_08046989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_miniature'} */
class Block_546268077675d98345aff79_12965507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12
        col-sm-6 col-lg-4 col-xl-3"), 0, true);
?> <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_1263649675d98345af080_37497145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
    <section class="product-accessories clearfix">
      <p class="h5 text-uppercase">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </p>
      <div class="products row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_546268077675d98345aff79_12965507', 'product_miniature', $this->tplIndex);
?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </section>
    <?php }?> <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_286709185675d98345b0c44_60749936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>
 <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1931376434675d98345b16a1_25264703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_2073203785675d98345b1ea1_43598183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Footer content -->
      <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1872432389675d98345b1c96_50955634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="page-footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073203785675d98345b1ea1_43598183', 'page_footer', $this->tplIndex);
?>

    </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_792518828675d98345a2370_78811372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_792518828675d98345a2370_78811372',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1459448932675d98345a25d1_99922288',
  ),
  'page_header' => 
  array (
    0 => 'Block_870092263675d98345a27d6_34080240',
  ),
  'page_title' => 
  array (
    0 => 'Block_9106988675d98345a29d6_61605746',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1733368443675d98345a3703_21195651',
  ),
  'page_content' => 
  array (
    0 => 'Block_1740840107675d98345a3926_82369132',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_408638275675d98345a3e57_90395639',
  ),
  'product_prices' => 
  array (
    0 => 'Block_258249531675d98345a4757_11434525',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_1326650157675d98345a4d41_90112545',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_184135286675d98345a6876_25139534',
  ),
  'product_customization' => 
  array (
    0 => 'Block_29212206675d98345a7a14_13771181',
  ),
  'product_buy' => 
  array (
    0 => 'Block_22420497675d98345a8df1_24357334',
  ),
  'product_variants' => 
  array (
    0 => 'Block_292010987675d98345a9be8_77202248',
  ),
  'product_pack' => 
  array (
    0 => 'Block_1616212721675d98345aa240_40999040',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_1717342317675d98345ab769_07867291',
    1 => 'Block_546268077675d98345aff79_12965507',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_788106249675d98345ac759_01687377',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1597276272675d98345acd74_60101436',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_1723608499675d98345ad357_56776597',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_2189108675d98345ad993_21119687',
  ),
  'product_details' => 
  array (
    0 => 'Block_1662749509675d98345aea92_08046989',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_1263649675d98345af080_37497145',
  ),
  'product_footer' => 
  array (
    0 => 'Block_286709185675d98345b0c44_60749936',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1931376434675d98345b16a1_25264703',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1872432389675d98345b1c96_50955634',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2073203785675d98345b1ea1_43598183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1459448932675d98345a25d1_99922288', 'page_header_container', $this->tplIndex);
?>


  <section id="main">
    <meta content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" />

    <div class="row product-container js-product-container">
      <div style="width: 100%">
        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1733368443675d98345a3703_21195651', 'page_content_container', $this->tplIndex);
?>

        </div>
        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_258249531675d98345a4757_11434525', 'product_prices', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326650157675d98345a4d41_90112545', 'product_quantities', $this->tplIndex);
?>


          <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184135286675d98345a6876_25139534', 'product_description_short', $this->tplIndex);
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29212206675d98345a7a14_13771181', 'product_customization', $this->tplIndex);
?>
 <?php }?>

            <div class="product-actions js-product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22420497675d98345a8df1_24357334', 'product_buy', $this->tplIndex);
?>

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

    <?php echo '<script'; ?>
>
      const dropdownItems = document.querySelectorAll(".dropdown li");

      dropdownItems.forEach((item) => {
        item.addEventListener("click", () => {
          const content = item.querySelector(".dropdown-content");
          content.style.display =
            content.style.display === "block" ? "none" : "block";
        });
      });
    <?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
    <div class="tab-list-title">
      <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
      <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
    </div>
    <?php }?>

    <div class="tab-list-title">
      <h2>Cechy</h2>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662749509675d98345aea92_08046989', 'product_details', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263649675d98345af080_37497145', 'product_accessories', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286709185675d98345b0c44_60749936', 'product_footer', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1931376434675d98345b16a1_25264703', 'product_images_modal', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1872432389675d98345b1c96_50955634', 'page_footer_container', $this->tplIndex);
?>

  </section>

  <?php
}
}
/* {/block 'content'} */
}
