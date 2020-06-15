<?php

return array(
    'mguide' => array('mainPanel', 'mguide/main/main', 'mguideIconForm', '', A_ACCESS, array(
        'introducao' => array('introducao', 'mguide/main/introducao', 'mguideIconForm', '', A_ACCESS, array(
            'presentation' => array('Presentation', 'mguide/introducao/apresentacao', 'mguideIconForm', '', A_ACCESS, array()),
            'instalacao' => array('Installation', 'mguide/introducao/instalacao', 'mguideIconForm', '', A_ACCESS, array()),
            'directories' => array('Directories', 'mguide/introducao/diretorios', 'mguideIconForm', '', A_ACCESS, array()),
            'configuracao' => array('Configuration', 'mguide/introducao/configuracao', 'mguideIconForm', '', A_ACCESS, array()),
            'examples' => array('Examples', 'mguide/introducao/exemplos', 'mguideIconForm', '', A_ACCESS, array()),
        )),
        'fundamentals' => array('Fundamentals', 'mguide/main/fundamentals', 'mguideIconForm', '', A_ACCESS, array(
            'imvc' => array('MVC', 'mguide/fundamentos/imvc', 'mguideIconForm', '', A_ACCESS, array(
                'mvc' => array('The MVC pattern', 'mguide/fundamentos/mvc', 'mguideIconForm', '', A_ACCESS, array()),
                'app' => array('Application', 'mguide/fundamentos/app', 'mguideIconForm', '', A_ACCESS, array()),
                'module' => array('Modules', 'mguide/fundamentos/module', 'mguideIconForm', '', A_ACCESS, array()),
                'fcontroller' => array('Controller', 'mguide/fundamentos/fcontroller', 'mguideIconForm', '', A_ACCESS, array()),
                'fmodel' => array('Model', 'mguide/fundamentos/fmodel', 'mguideIconForm', '', A_ACCESS, array()),
                'fview' => array('View', 'mguide/fundamentos/fview', 'mguideIconForm', '', A_ACCESS, array()),
                'praticas' => array('Best practices', 'mguide/fundamentos/praticas', 'mguideIconForm', '', A_ACCESS, array()),
            )),
            'index' => array('Script index.php', 'mguide/fundamentos/index', 'mguideIconForm', '', A_ACCESS, array()),
            'cycle' => array('Execution Cycle', 'mguide/fundamentos/ciclo', 'mguideIconForm', '', A_ACCESS, array()),
            'dto' => array('The $ data object', 'mguide/fundamentos/dto', 'mguideIconForm', '', A_ACCESS, array()),
            'context' => array('Context', 'mguide/fundamentos/contexto', 'mguideIconForm', '', A_ACCESS, array()),
            'nai' => array('Namespaces, Autoload, Import', 'mguide/fundamentos/nai', 'mguideIconForm', '', A_ACCESS, array()),
            'patterns' => array('Conventions and Patterns', 'mguide/fundamentos/patterns', 'mguideIconForm', '', A_ACCESS, array()),
        )),
        'controller' => array('Controller layer', 'mguide/main/controller', 'mguideIconForm', '', A_ACCESS, array(
            'controller' => array('What is a Controller?', 'mguide/controller/controller', 'mguideIconForm', '', A_ACCESS, array()),
            'frontcontroller' => array('FrontController', 'mguide/controller/frontcontroller', 'mguideIconForm', '', A_ACCESS, array()),
            'actions' => array('Actions', 'mguide/controller/actions', 'mguideIconForm', '', A_ACCESS, array()),
            'actionsfile' => array('The actions.php file', 'mguide/controller/actionsfile', 'mguideIconForm', '', A_ACCESS, array()),
            'iurl' => array('URL', 'mguide/controller/iurl', 'mguideIconForm', '', A_ACCESS, array(
                'urlformat' => array('URL format', 'mguide/controller/urlformat', 'mguideIconForm', '', A_ACCESS, array()),
                'getpost' => array('GET x POST', 'mguide/controller/getpost', 'mguideIconForm', '', A_ACCESS, array()),
                'actionsurl' => array('Actions URL', 'mguide/controller/actionsurl', 'mguideIconForm', '', A_ACCESS, array()),
            )),
            'filters' => array('Filters', 'mguide/controller/filters', 'mguideIconForm', '', A_ACCESS, array()),
            'exceptions' => array('Exception Handling', 'mguide/controller/exceptions', 'mguideIconForm', '', A_ACCESS, array()),
        )),
        'view' => array('View layer', 'mguide/main/view', 'mguideIconForm', '', A_ACCESS, array(
            'view' => array('What is a View?', 'mguide/view/view', 'mguideIconForm', '', A_ACCESS, array()),
            'controls' => array('Controls', 'mguide/view/controles', 'mguideIconForm', '', A_ACCESS, array()),
            'ajax' => array('AJAX', 'mguide/view/ajax', 'mguideIconForm', '', A_ACCESS, array()),
            'events' => array('Events', 'mguide/view/events', 'mguideIconForm', '', A_ACCESS, array()),
            'iform' => array('Forms', 'mguide/view/iform', 'mguideIconForm', '', A_ACCESS, array(
                'forms' => array('Forms', 'mguide/view/forms', 'mguideIconForm', '', A_ACCESS, array()),
                'validator' => array('Validator', 'mguide/view/validator', 'mguideIconForm', '', A_ACCESS, array()),
                'help' => array('Help', 'mguide/view/help', 'mguideIconForm', '', A_ACCESS, array()),
            )),
            'javacript' => array('Javascript', 'mguide/view/javascript', 'mguideIconForm', '', A_ACCESS, array()),
            'css' => array('CSS', 'mguide/view/css', 'mguideIconForm', '', A_ACCESS, array()),
            'grids' => array('Grids', 'mguide/view/grids', 'mguideIconForm', '', A_ACCESS, array()),
            // 'panels' => array ('Panels', 'mguide/view/panels', 'mguideIconForm', '', A_ACCESS, array ()),
            // 'gridfield' => array ('GridField', 'mguide/view/gridfield', 'mguideIconForm', '', A_ACCESS, array ()),
            'components' => array('Components', 'mguide/view/componentes', 'mguideIconForm', '', A_ACCESS, array()),
            // 'reports' => array ('Reports', 'mguide/view/reports', 'mguideIconForm', '', A_ACCESS, array ()),
            'images' => array('Images', 'mguide/view/imagens', 'mguideIconForm', '', A_ACCESS, array()),
            // 'themes' => array ('Themes', 'mguide/view/themes', 'mguideIconForm', '', A_ACCESS, array ()),
        )),
        'model' => array('Model layer', 'mguide/main/model', 'mguideIconForm', '', A_ACCESS, array(
            'model' => array('What is a Model?', 'mguide/model/model', 'mguideIconForm', '', A_ACCESS, array()),
            'itipos' => array('Data Types', 'mguide/model/itipos', 'mguideIconForm', '', A_ACCESS, array(
                'types' => array('Types', 'mguide/model/tipos', 'mguideIconForm', '', A_ACCESS, array()),
                'mtype' => array('Class MType', 'mguide/model/mtype', 'mguideIconForm', '', A_ACCESS, array()),
                'date' => array('MDate and MTimestamp', 'mguide/model/date', 'mguideIconForm', '', A_ACCESS, array()),
                'currency' => array('MCurrency', 'mguide/model/currency', 'mguideIconForm', '', A_ACCESS, array()),
                'file' => array('MFile', 'mguide/model/file', 'mguideIconForm', '', A_ACCESS, array()),
                'cpf' => array('MCPF', 'mguide/model/cpf', 'mguideIconForm', '', A_ACCESS, array()),
            )),
            'enum' => array('Enumerations', 'mguide/model/enum', 'mguideIconForm', '', A_ACCESS, array()),
            'persistence' => array('Persistence layer', 'mguide/model/persistence', 'mguideIconForm', '', A_ACCESS, array()),
            'ormmap' => array('ORMMAP', 'mguide/model/ormmap', 'mguideIconForm', '', A_ACCESS, array()),
            'criteria' => array('Criterias', 'mguide/model/criterias', 'mguideIconForm', '', A_ACCESS, array()),
            'query' => array('Query', 'mguide/model/query', 'mguideIconForm', '', A_ACCESS, array()),
            'script' => array('Script', 'mguide/model/script', 'mguideIconForm', '', A_ACCESS, array()),
        )),
        'service' => array('Service Layer', 'mguide/main/services', 'mguideIconForm', '', A_ACCESS, array(
            'servicelayer' => array('What is a Service?', 'mguide/servicelayer/services', 'mguideIconForm', '', A_ACCESS, array()),
// 'serviceuse' => array ('When to use?', 'mguide/service/serviceuse', 'mguideIconForm', '', A_ACCESS, array ()),
        )),
        'services' => array('Framework Services', 'mguide/main/services', 'mguideIconForm', '', A_ACCESS, array(
            'manager' => array('Class Manager', 'mguide/servicos/manager', 'mguideIconForm', '', A_ACCESS, array()),
            'mutil' => array('MUtil Class', 'mguide/servicos/mutil', 'mguideIconForm', '', A_ACCESS, array()),
            'mkrono' => array('Class MKrono', 'mguide/servicos/mkrono', 'mguideIconForm', '', A_ACCESS, array()),
            'csv' => array('CSV files', 'mguide/servicos/csv', 'mguideIconForm', '', A_ACCESS, array()),
            'mail' => array('Mail Services', 'mguide/servicos/mail', 'mguideIconForm', '', A_ACCESS, array()),
            'security' => array('Security', 'mguide/servicos/seguranca', 'mguideIconForm', '', A_ACCESS, array()),
            // 'iwizard' => array ('Wizard', 'mguide/servicos/iwizard', 'mguideIconForm', '', A_ACCESS, array (
            // 'wizard' => array ('Wizard Application', 'mguide/servicos/wizard', 'mguideIconForm', '', A_ACCESS, array ()),
            //)),
            'wizard' => array('Wizard Application', 'mguide/servicos/wizard', 'mguideIconForm', '', A_ACCESS, array()),
            'zend' => array('Integration with Zend', 'mguide/servicos/zend', 'mguideIconForm', '', A_ACCESS, array()),
        )),
        'frameworks' => array('Used frameworks', 'mguide/main/frameworks', 'mguideIconForm', '', A_ACCESS, array(
            'dojo' => array('DOJO', 'mguide/frameworks/dojo', 'mguideIconForm', '', A_ACCESS, array()),
            'doctrine' => array('Doctrine', 'mguide/frameworks/doctrine', 'mguideIconForm', '', A_ACCESS, array()),
            'smarty' => array('Smarty', 'mguide/frameworks/smarty', 'mguideIconForm', '', A_ACCESS, array()),
        )),
    ))
);

?>