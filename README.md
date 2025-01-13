# Installation Instructions for Saeed Custom API

To install and set up the Saeed Custom API package, please follow the steps below:

---
## Step 1: Install the Package

You can install the package using Composer with the following command:
```bash
 composer require saeed/custom-api:dev-main
```
---
## Step 2: Autoload Configuration

In your composer.json file, under the autoload section, add the following entry for PSR-4 autoloading:
```json
"autoload": {
  "psr-4": {
  //...
    "Saeed\\CustomApi\\": "packages/saeed/customApi/src/"
  }
}
```
Run the following command to update the autoloader:

   ```bash
   composer dump-autoload
   ```
---
## Step 3: Service Provider Registration

Next, you need to register the service provider in your application's configuration. Open the config/app.php file and add the provider to the providers array:
```php
'providers' => [
   // Other service providers...
    \Saeed\CustomApi\CustomApiServiceProvider::class,
],
```
---
## Step 4: Creating Form Requests and Services

You can create form requests and logical services using the following Artisan commands:


### Create API Request

To create a form request, run:
```bash
php artisan make:apiRequest {name}
```
### Create Logic Service

To create a logic service, use:
```bash
  php artisan make:apiService {name}
```
---
## Step 5: Controller Setup

In your controller, you can inject the service as follows:
```php
  public function __construct(private Name $name) {}
```
---
## Step 6: Using the Logic Service

You can use the logic service like this:
```php
  $result = $this->testService->showTests();
```
---
## Step 7: Using the API Response

To format your API response, use the following code:

```php
    return ApiResponse::withMessage('Your message here')
    ->withData(TestResource::collection($result->data))
    ->build()
    ->apiResponse();
```
---
## Conclusion

These instructions should help you get started with the Saeed Custom API package. If you have any questions or issues, feel free to reach out for support!
