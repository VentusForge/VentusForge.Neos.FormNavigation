# VentusForge.Neos.FormNavigation

Adds navigation buttons to the form.

This package includes Nodes for the [Neos FormBuilder](https://github.com/neos/form-builder) too.

## Hide the default navigation in Form-Builder

Add the mixin to the form-builder:

```yaml
'Neos.Form.Builder:NodeBasedForm':
  superTypes:
    'VentusForge.Neos.FormNavigation:Mixin.HideNavigation': true
```

Update the form template (`Neos.Form:Form`) to hide the default navigation:

```html
<f:if condition="{form.renderingOptions.showNavigation}">
      <f:render partial="Neos.Form:Form/Navigation" arguments="{form: form}" />
</f:if>
```

Set the default settings in the form definition:

```yaml
Neos:
  Form:
    presets:
      default:
        formElementTypes:
          'Neos.Form:Form':
            renderingOptions:
              showNavigation: true
```
