OOFEModules
-----------
```
/
+- src/
|  +- OOFEModules.lang
|     * The class that you use in your code to render modules.  Will refer to as the manager for now.
|     * Constructor receives configuration for app, include paths for modules and their namespaces
|     * has `render()` method that takes arguments for module name, options/attributes, and content
|  +- Controller.lang
|     * acts as parent for module controllers
|  +- Model.lang
|     * acts as parent for module models
```

Modules directory

```
/
+- Module1/
|  +- config.lang
|     * configuration for module
|     * must be in a multi-language format such as 'json' or 'yaml'.  all 'managers' must have parsers for each supported format, so may stick with just 'json' or otherwise limit this, at least for shareable items
|     * may need to be cached by 'manager' for performance reasons so it can know all module names available
|  +- controller.lang
|     * optional controller handles data stuff
|     * may be set up to handle full rendering.  In this case, will subclass a default controller and have a `render()` method that returns a string representing the rendered output of the module.  Will either have the same argument signature as the manager's `render()` method, or the constructor will
|     * may just act as the data handler, in which case the data/content arguments will be passed into it and then it will be passed to the template
|     * provide one for each supported programming language
|  +- model.lang
|     * if controller handles full rendering, this will be an optional class representing the passed in data/content that will be passed to the template
|     * can have default values, getters for values, perform transformations, etc
|     * provide one for each supported programming language
|  +- template.lang
|     * template to be rendered
|     * provide one for each supported templating language
|     * may support multiple templates specified in config that could be loaded conditionally for variants or as partials
|  +- scripts.lang
|     * client side scripts to be loaded with module
|     * can be generic js or something that compiles to js.  config specifies or hints compilation needs
|     * may have some way of supporting class system with defined way of instantiating components and providing configuration to the js, such as data attributes or a script tag inside the component
|     * may support multiple files specified in config, possibly for variants
|     * may need to support rewriting bits of file with paths and other configuration for use in compiled output
|  +- styles.lang
|     * client side styles of module
|     * can be generic css or something that compiles to css.  config specifies or hints compilation needs
|     * may support multiple files specified in config, possibly for variants
|     * may need to support rewriting bits of file with paths and other configuration for use in compiled output
|  +- etc
|     * items may have other assets, such as images.  must be specified in config, including any compilation needs
