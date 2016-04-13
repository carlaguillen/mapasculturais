<div id="filter-projects" class="entity-filter clearfix" ng-show="data.global.filterEntity === 'project'">
    <header class="clearfix">
        <a href="<?php echo $app->getBaseUrl() ?>" class="icon icon-go-back"></a>
        Projetos
        <div id="filter-elements">
            <a class="tag-selected tag-clear" ng-show="hasFilter()" ng-click="cleanAllFilters()">Remover todos filtros</a>
            <a class="icon icon-show-advanced-search" ng-click="toggleAdvancedFilters()"></a>
        </div>
    </header>
    <div ng-show="!collapsedFilters && !showInfobox()">
        <div class="section group">
            <form class="form-palavra-chave filter search-filter--keyword col span_1_of_4">
                <label for="palavra-chave-evento">Palavra-chave</label>
                <input ng-model="data.project.keyword" class="search-field" type="text" name="palavra-chave-evento" placeholder="Buscar projetos" />
            </form>
            <!--.filter-->
            <div class="filter col span_1_of_4">
                <span class="label search-filter--tipo">Tipo</span>
                <div class="dropdown">
                    <div class="placeholder">Selecione os tipos</div>
                    <div class="submenu-dropdown">
                        <ul class="filter-list">
                            <li ng-repeat="type in types.project" ng-class="{'selected':isSelected(data.project.types, type.id)}" ng-click="toggleSelection(data.project.types, type.id)">
                                <span>{{type.name}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--.filter-->
            <div class="filter search-filter--inscricoes-abertas col span_1_of_4">
                <span class="icon icon-check" ng-class="{'selected': data.project.ropen}" ng-click="data.project.ropen = !data.project.ropen"></span>
                <span class="label show-label" ng-click="data.project.ropen = !data.project.ropen">Inscrições Abertas</span>
            </div>
            <!--.filter-->
            <div class="filter verified-filter search-filter--verified col span_1_of_4">
                <a class="hltip btn btn-verified" ng-class="{'selected':data.project.isVerified}" title="Exibir somente resultados verificados" ng-click="toggleVerified('project')"><?php $this->dict('search: verified results') ?></a>
            </div>
            <!-- div.verified-filter -->
        </div>
    </div>
</div>
<!--#filter-projects-->
