
# Obtain Token Request

## Structure

`ObtainTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clientId` | `string` | Required | The Square-issued ID of your application, available from the OAuth page<br>for your application on the Developer Dashboard.<br>**Constraints**: *Maximum Length*: `191` | getClientId(): string | setClientId(string clientId): void |
| `clientSecret` | `string` | Required | The Square-issued application secret for your application, available<br>from the OAuth page for your application on the Developer Dashboard.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `1024` | getClientSecret(): string | setClientSecret(string clientSecret): void |
| `code` | `?string` | Optional | The authorization code to exchange.<br>This is required if `grant_type` is set to `authorization_code`, to indicate that<br>the application wants to exchange an authorization code for an OAuth access token.<br>**Constraints**: *Maximum Length*: `191` | getCode(): ?string | setCode(?string code): void |
| `redirectUri` | `?string` | Optional | The redirect URL assigned in the OAuth page for your application on the Developer Dashboard.<br>**Constraints**: *Maximum Length*: `2048` | getRedirectUri(): ?string | setRedirectUri(?string redirectUri): void |
| `grantType` | `string` | Required | Specifies the method to request an OAuth access token.<br>Valid values are: `authorization_code`, `refresh_token`, and `migration_token`<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `20` | getGrantType(): string | setGrantType(string grantType): void |
| `refreshToken` | `?string` | Optional | A valid refresh token for generating a new OAuth access token.<br>A valid refresh token is required if `grant_type` is set to `refresh_token` , to indicate the application wants a replacement for an expired OAuth access token.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `1024` | getRefreshToken(): ?string | setRefreshToken(?string refreshToken): void |
| `migrationToken` | `?string` | Optional | Legacy OAuth access token obtained using a Connect API version prior<br>to 2019-03-13. This parameter is required if `grant_type` is set to<br>`migration_token` to indicate that the application wants to get a replacement<br>OAuth access token. The response also returns a refresh token.<br>For more information, see [Migrate to Using Refresh Tokens](https://developer.squareup.com/docs/oauth-api/migrate-to-refresh-tokens).<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `1024` | getMigrationToken(): ?string | setMigrationToken(?string migrationToken): void |
| `scopes` | `?(string[])` | Optional | A JSON list of strings representing the permissions the application is requesting.<br>For example: "`["MERCHANT_PROFILE_READ","PAYMENTS_READ","BANK_ACCOUNTS_READ"]`"<br>The access token returned in the response is granted the permissions<br>that comprise the intersection between the requested list of permissions, and those<br>that belong to the provided refresh token. | getScopes(): ?array | setScopes(?array scopes): void |
| `shortLived` | `?bool` | Optional | A boolean indicating a request for a short-lived access token.<br>The short-lived access token returned in the response expires in 24 hours. | getShortLived(): ?bool | setShortLived(?bool shortLived): void |

## Example (as JSON)

```json
{
  "client_id": "APPLICATION_ID",
  "client_secret": "APPLICATION_SECRET",
  "code": "CODE_FROM_AUTHORIZE",
  "grant_type": "authorization_code"
}
```

