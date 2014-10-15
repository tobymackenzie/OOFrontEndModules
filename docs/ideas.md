Each component has or can have:
- config file: defines configuration for general component and each piece (views, js, styles).  can have multiple types that define different sets of options and multiple optional sets of configuration that can be enabled.  These might load one or more scripts and css files.
- view: template containing markup, putting data into place, and bringing in sub-components
- scripts: one or more scripts for the component.  can be general scripts to be run, classes representing the component, code to instantiate component…
- styles

A site will have one or more configuration files defining what components it will load and what type and options each will have.  A build phase will take this configuration, look at each component's config, and build together all CSS and JS using whatever build methods the site's config specifies.  The build phase will ensure that scripts and styles referenced multiple times will only be included once, unless they are configured otherwise.  A mechanism will be provided to reference assets by a generic name rather than a path.  The appropriate links will be output in the appropriate place in the site template.  The site will essentially be a component at this point, composed of some markup and many sub-components.

Referencing assets may be like 'ComponentName/assetName' for components.  Something will also be provided to reference shared generic files with more generic names (like 'jquery') that will follow some convention.  Configuration will define version specifics.  Outer component configuration such as site configuration will override sub-components.  Build phase will use bower or the like (configurable) to install third-party assets.

A component can "subclass" another component.  Any supplied pieces will override those of the parent.  There will be a way to override the name of the parent version so that everything that uses that component by name will use the child / alternative component instead.

Component can 'extend' multiple other components, getting their styles and behavior and possibly bringing in their content as well.

This project can essentially replace the entire front end for a site.  Project users simply install, configure, build, and have their code pass data into and render components as needed.

Classes are a special attribute.  Can be minimized.  JS well get classes from a map that will be changed on build.  CSS and HTML will simply have them replaced.  Classes will come from modules:
- each module will have a class that is its name
- each module can have states and options that will be appended to module name
- site config defines what format these classes are output in (BEM, OOCSS, SMACSS, minified, etc)

Each component will define a controller type and a template type, or if supporting multiple, an array in order of preference, in its config.  Each supported language will have a renderer.  If a given component has a controller in the renderers language, it will use that.  Otherwise, it will see if it uses a renderer marked as available to the native renderer via config to be run via CLI.  Each renderer can have one or more templating engines available.  The renderer will also choose those in preferred order.

names
----------

Each component must have a unique name that will not overlap for a renderer.  To help prevent overlap, a namespace system will be provided.  When referencing components, must use the name with the namespace prepended, with a separator character, or use some syntax to reference it relative to the current module.  Will likely use POSIX pathlike structure, like 'MyNS/MyModule' and './MyModule'.  A given module path will be put under a namespace, which can be specified in the main manager config.  May provide a pathwide config that specifies a default namespace, but the main manager config can override this.  Namespaces can have sub-namespaces for organization purposes.

