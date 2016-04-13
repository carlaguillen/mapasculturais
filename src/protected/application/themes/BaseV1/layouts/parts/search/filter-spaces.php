<div id="filter-spaces" class="entity-filter clearfix" ng-show="data.global.filterEntity === 'space'">
    <header class="clearfix">
        <a href="<?php echo $app->getBaseUrl() ?>" class="icon icon-go-back"></a>
        <?php $this->dict('entities: Spaces') ?>
        <div id="filter-elements">
            <a class="tag-selected tag-clear" ng-show="hasFilter()" ng-click="cleanAllFilters()">Remover todos filtros</a>
            <a class="icon icon-show-advanced-search" ng-click="toggleAdvancedFilters()"></a>
        </div>
    </header>
    <div ng-show="!collapsedFilters && !showInfobox()">
        <div class="section group">
            <form class="form-palavra-chave filter search-filter--keyword col span_2_of_4">
                <label for="palavra-chave-espaco">Palavra-chave</label>
                <input ng-model="data.space.keyword" class="search-field" type="text" name="palavra-chave-espaco" placeholder="Buscar <?php $this->dict('entities: spaces') ?>" />
            </form>
        </div>
        
        <div class="section group">
        <!--.filter-->
            <div class="filter search-filter--area col span_1_of_4">
                <span class="label">Área de Atuação</span>
                <div class="dropdown">
                    <div class="placeholder">Selecione as áreas</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list">
                            <li ng-repeat="area in areas" ng-class="{'selected':isSelected(data.space.areas, area.id)}" ng-click="toggleSelection(data.space.areas, area.id)">
                                <span>{{area.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter search-filter--tipo col span_1_of_4">
                <span class="label">Tipo</span>
                <div class="dropdown">
                    <div class="placeholder">Selecione os tipos</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list">
                            <li ng-repeat="type in types.space" ng-class="{'selected':isSelected(data.space.types, type.id)}" ng-click="toggleSelection(data.space.types, type.id)">
                                <span>{{type.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
            <!--.filter-->
            <div class="filter search-filter--acessibilidade col span_1_of_4">
                <span class="icon icon-check" ng-click="data.space.acessibilidade = !data.space.acessibilidade" ng-class="{'selected':data.space.acessibilidade}"></span>
                <span class="label show-label" ng-click="data.space.acessibilidade = !data.space.acessibilidade">Acessibilidade</span>
            </div>
            <!--.filter-->
            <div class="filter verified-filter search-filter--verified col span_1_of_4">
                <a class="hltip btn btn-verified" ng-class="{'selected':data.space.isVerified}" title="Exibir somente resultados Verificados" ng-click="toggleVerified('space')"><?php $this->dict('search: verified results') ?></a>
            </div>
            <!-- div.verified-filter -->
        </div>
    </div>
</div>
<!--#filter-spaces-->