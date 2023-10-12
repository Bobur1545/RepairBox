
# List Dispute Evidence Response

Defines the fields in a `ListDisputeEvidence` response.

## Structure

`ListDisputeEvidenceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `evidence` | [`?(DisputeEvidence[])`](/doc/models/dispute-evidence.md) | Optional | The list of evidence previously uploaded to the specified dispute. | getEvidence(): ?array | setEvidence(?array evidence): void |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `cursor` | `?string` | Optional | The pagination cursor to be used in a subsequent request.<br>If unset, this is the final response. For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination). | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "cursor": "G1aSTRm48CLjJsg6Sg3hQN1b1OMaoVuG",
  "evidence": [
    {
      "dispute_id": "bVTprrwk0gygTLZ96VX1oB",
      "evidence_text": "1Z8888888888888888",
      "evidence_type": "TRACKING_NUMBER",
      "id": "TOomLInj6iWmP3N8qfCXrB",
      "uploaded_at": "2018-10-18T16:01:10.000Z"
    },
    {
      "dispute_id": "bVTprrwk0gygTLZ96VX1oB",
      "evidence_file": {
        "filename": "evidence.tiff",
        "filetype": "image/tiff"
      },
      "evidence_id": "TOomLInj6iWmP3N8qfCXrB",
      "evidence_type": "GENERIC_EVIDENCE",
      "uploaded_at": "2018-10-18T16:01:10.000Z"
    }
  ]
}
```

