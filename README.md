# instance
Трейт для лёгкого инстансования классов.

Просто подключай трейт в любой класс:

```php
class Test {
    use Instance;
}
```
И будут доступные волшебные методы:

**Создать новый экземпляр класса:**

```php
Test::factory()
```

**Создать синглтон класса:**

```php
Test::instance()
```

Пример использования:

```php
class StringHelper {
    use Instance;
    
    public function reverse($string) {
        return strrev($string);    
    }
}

echo StringHelper::instance()->reverse('1234567890');
```