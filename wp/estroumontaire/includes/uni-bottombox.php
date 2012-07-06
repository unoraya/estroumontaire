	<div class="row">

              <div class="threecol"> 
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Left") ) : ?>
               <?php endif; ?>
               </div>
               
               
               
              <div class="threecol">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Center Left") ) : ?>
              <?php endif; ?>
              </div>
           
              
              
              <div class="threecol">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Center Right") ) : ?>
              <?php endif; ?>
              </div>
              
              
              <div class="threecol last">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Right") ) : ?>
              <?php endif; ?>
              </div>

		</div>