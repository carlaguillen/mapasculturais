<div id="filter-agents" class="entity-filter clearfix" ng-show="data.global.filterEntity === 'agent'">
    <header class="clearfix">
        <a href="<?php echo $app->getBaseUrl() ?>" class="icon icon-go-back"></a>
        Agentes
         <div id="filter-elements">
            <a class="tag-selected tag-clear" ng-show="hasFilter()" ng-click="cleanAllFilters()">Remover todos filtros</a>
            <a class="icon icon-show-advanced-search" ng-click="toggleAdvancedFilters()"></a>
        </div>
    </header>
    <div ng-show="!collapsedFilters && !showInfobox()">
        <div class="section group">
            <form class="form-palavra-chave filter search-filter--keyword col span_2_of_3">
                <label>Palavra-chave</label>
                <input ng-model="data.agent.keyword" class="search-field" type="text" name="busca" placeholder="Buscar agentes" />
            </form>
        </div>
        <div class="section group">
            <!--.filter-->
            <div class="filter search-filter--area col span_1_of_3">
                <span class="label">Área de Atuação</span>
                <div class="dropdown">
                    <div class="placeholder">Selecione as áreas</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list">
                            <li ng-repeat="area in areas" ng-class="{'selected':isSelected(data.agent.areas, area.id)}" ng-click="toggleSelection(data.agent.areas, area.id)">
                                <span>{{area.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter search-filter--tipo col span_1_of_3">
                <span class="label">Tipo</span>
                <div id="tipo-de-agente" class="dropdown" data-closeonclick="true">
                    <div class="placeholder">{{getName(types.agent, data.agent.type)}}&nbsp;</div>
                    <div class="submenu-dropdown">
                        <ul>
                            <li ng-repeat="type in types.agent" ng-click="data.agent.type = type.id">
                                <span>{{type.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter verified-filter search-filter--acessibilidade col span_1_of_3">
                <a class="hltip btn btn-verified" ng-class="{'selected':data.agent.isVerified}" title="Exibir somente resultados Verificados" ng-click="toggleVerified('agent')"><?php $this->dict('search: verified results') ?></a>
            </div>
            <!-- div.verified-filter -->
        </div>
    </div>
</div>
<!--#filter-agents-->